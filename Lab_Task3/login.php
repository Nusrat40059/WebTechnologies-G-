<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<?php 
session_start();
if (isset($_SESSION['user_name'])){header("location:Dashboard.php");}
else
{
  require 'dashboard.php';
}

$username="admin";
$userpassword="admin";

if (isset($_POST['user_name'])) {
    if ($_POST['user_name']==$username && $_POST['password']==$userpassword) {
        $_SESSION['user_name'] = $username;
        header("location:Dashboard.php");
    }
    else{
    }
}
$user_nameErr = $passwordErr = "";
$user_name = $password = "";
$message = $error="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user_name"])) 
  {
    $user_nameErr = "Name is required";
  } 
  else 
  {
    $user_name = test_input($_POST["user_name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$user_name))
    {
      $user_nameErr = "Only letters, white space, period, dash allowed";
      $user_name="";
    }
    else if (str_word_count($user_name)<2 ) 
    {
      $user_nameErr = "Minimum two words";
      $user_name="";
    }
    else if($_POST['user_name']!=$username )
    {
      $user_nameErr="User Name invalid";
    }
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  } 
  else 
  {
    $password = test_input($_POST["password"]);
    if (strlen($password) <= 3)
    {
      $passwordErr = "Must be atleast 3 characters";
      $password="";
    }

    else if($_POST['password']!=$userpassword)
    {
      $passwordErr="Password invalid";
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <h1>LOGIN</h1>
  <hr>
  <label for="user_name">User name :</label>
  <input type="text" id="user_name" name="user_name"><?php if (isset($_COOKIE['user_name'])) {
    echo $_COOKIE['user_name'];
  } ?>
  <span class="error"> <?php echo $user_nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password"><?php if (isset($_COOKIE['password'])) {
    echo$_COOKIE['password'];
  } ?>
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

<hr>

  <input type="checkbox" id="remember_me" name="remember_me"><?php if(isset($_COOKIE['user_name'])){
    echo "checked";
  } ?>
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="change_password.php">Change Password</a>

 </fieldset>
     <?php
        if(isset($message)){
            echo $message;
        }

        if (!empty($_POST['remember'])) {
            setcookie("user_name", $_POST['user_name'], time()+10);
            setcookie("password", $_POST['password'], time()+10);                
        }else{
            setcookie("user_name", "");
            setcookie("password", "");
        }
    ?>
</form>   
</body>
</html>

<style>
.error {
    color: #FF0000;
}
</style>
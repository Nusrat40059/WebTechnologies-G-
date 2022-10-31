<html>
<head>
    <title></title>
</head> 
<body> 
<?php
include 'Home.php';

$message = $error = "";
if(isset($_POST["login"])){
    if(empty($_POST["name"])){
        $error = "Please enter your username";
    }
    else if(empty($_POST["pass"])){
        $error = "Please enter your password";
    }
    else{
            if($item["username"]==$_POST["name"] && $item["pass"]==$_POST["pass"]){                    
                    session_start();                    

                    $name =$_POST["name"];

                    $_SESSION['name'] = $name;
                    header("Home.php");                    
                }
                else{
                    $error = "Incorrect username or password";
                }
            
        }
    }

?> 
    <br />  
    <div class="container" style="width: 500px; height: 10%;"> 
    <br>
    <form action="" method="post">
        <?php
            if(isset($error)){
                 echo $error;
            }
        ?>
        <fieldset>
        <legend>LOGIN</legend>
        <label>User Name :</label>
        <input type = "text" name = "name" class="Login Form" value="<?php if(isset($_COOKIE['name'])) {echo $_COOKIE['name'];} ?>"><br><br>
        <label>Password  :</label>
      <div>  <input type = "password" name = "password" class="Login Form" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"><br><br></div>
        
        <input type = "checkbox" name = "remember" <?php if(isset($_COOKIE['username'])) {echo "checked";} ?>>Remember Me<br><br>
        <input type = "submit" name = "login" value = "Login">
        
        <?php
            if(isset($message)){
                echo $message;
            }

            if (!empty($_POST['remember'])) {
                setcookie("name", $_POST['name'], time()+30);
                setcookie("password", $_POST['password'], time()+30);                
            }else{
                setcookie("name", "");
                setcookie("password", "");
            }
        ?>
    </form>
</body>
</html>
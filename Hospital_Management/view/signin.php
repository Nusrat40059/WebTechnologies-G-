<?php 
require 'component/header.php';  
include '../controller/login_val.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
   

</head>

<body>

    <div style="width: 100%;">
   

    <div class="login_part" style="width: 500px;padding:20px;margin:auto;">
        <h2 style="text-align:center">Login Form</h2>
        <form  method="post">
            <div class="imgcontainer">
            <img src="../assets/icon.webp" alt="Avatar" class="avatar">
            </div>
        
            <div class="container">
            <div>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>" >
                <span class="error"><?php echo $err_email; ?></span>     
            </div>
            
           <div>
                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" value="<?php echo $pass;?>" >
                <span class="error"><?php echo $err_pass; ?></span>     
           </div>

            <label>
                <input type="checkbox" checked="checked" name="remember" value="1" > Remember me
            </label>
            <span class="psw" > <a href="./forgotpass.php">Forgot password?</a></span>

            <div style="text-align:center;margin-top: 10px;"  >
                <button style="font-size: 20px;" name="submit" type="submit">Login</button>
                
            </div>
           
          
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
                <p>You don't have Account ? <a href="./signup.php">Signup</a></p>
               
            </div>
        </form>
    </div>
</div>
<?php 
        include 'component/footer.php'; 
    ?>
</body>




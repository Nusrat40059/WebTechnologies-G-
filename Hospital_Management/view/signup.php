<?php 
include 'component/header.php'; 
include '../controller/Signup_val.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

   
</head>
<body>
    
    <div style="width: 100%;">
    <div>
        <?php echo $message; ?>
    </div>
    
   

    <div class="login_part" style="width: 500px;padding:20px;margin:auto;">
        <h2 style="text-align:center">Create Account</h2>
        
        
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="imgcontainer">
            <img src="../assets/signup.webp" alt="Avatar" class="avatar" >
            </div>
        
            <div class="container">
                <div>
                    <label for="name"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="name" value="<?php echo $name;?>">
                    <p class="error"><?php echo $err_name; ?></p>                   
                </div>

                <div>
                    <label for="uname"><b>Email</b></label>
                    <input type="text" placeholder="Enter email" name="email" value="<?php echo $email;?>">
                    <p class="error"><?php echo $err_email; ?></p>  
                </div>
                <div style="padding-top:20px;padding-bottom:20px;" >
                    <label style="margin-bottom:10px;height: 20px;" for="uname"><b>Gender</b></label> <br/>
                    <br/>
                    <input type="radio" name="gender" <?php if(isset($gender) && $gender =="female") echo "checked";?> value="female">Female
                    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked";?>value="male">Male 
                    <p class="error"><?php echo $err_gender; ?></p>  
                   
                </div>
           
                <div>
                    <label for="psw"><b>Address</b></label> <br/><br/>
                    <textarea name="address" rows="4" cols="50" value="<?php echo $address;?>"></textarea>
                    <p class="error"><?php echo $err_add; ?></p> 
                </div>
                <div>
                    <br/>
                    <label for="phone"><b>Phone</b></label> &nbsp; &nbsp;&nbsp;
                    <input type="tel" name="phone" value="<?php echo $phone;?>">
                    
                    <p class="error"><?php echo $err_phone; ?></p> 
                    
                    
                </div>
                <br/>
                <div>
                    <br/>
                    <label for="image"><b>Image</b></label> &nbsp; &nbsp;&nbsp;
                    <input type="file" name="file" value="<?php echo $image;?>">      
                </div>
                <br/>
                <div>
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" value="<?php echo $conpass;?>">
                    
                    <p class="error"><?php echo $err_pass; ?></p> 

                </div>

                <div>
                    <label for="psw"><b>Confirm Password</b></label>
                    <input type="password" placeholder="Enter Password" name="conpass" value="<?php echo $conpass;?>">
                    
                    <p class="error"><?php echo $err_conpass; ?></p> 
                </div>
            
                <div style="text-align:center;margin-top: 10px; "  >
                    <button type="submit" name="submit" value="Register">
                        Submit 
                    </button> 
                    
                </div>
            
          
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
                <p>You have Account ? <a href="./signin.php">login</a></p>
               
            </div>
        </form>
    </div>
</div>
<?php 
        include 'component/footer.php'; 
    ?>
</body>
</html>

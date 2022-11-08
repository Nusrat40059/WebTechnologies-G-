<?php 
  session_start(); 
?> 

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./style/header.css">
    <link rel="stylesheet" type="text/css" href="./style/index.css">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
 
</head>
<body>
 
    <div>
      <ul>
        
      <?php if(isset($_SESSION['email'])){ ?>
        <li><a href="/Hospital_Management/view/profile.php">profile</a></li>
      <?php } else "";?> 


      <li><a class="active" href="/Hospital_Management/view/index.php">View User</a></li>
      <li><a href="/Hospital_Management/view/onlinePrescription.php">Prescription</a></li>
      <li><a href="/Hospital_Management/view/ScheduleTime.php">ScheduleTime</a></li>
      <li><a href="/Hospital_Management/view/ViewAppoinment.php">ViewAppoinment</a></li>
     
     <?php if(isset($_SESSION['email']))
      { 
      } 
       
       else { ?>
        <li style="float:right;"><a href="/Hospital_Management/view/signup.php">SignUp</a></li>
     <?php }?>      
      
      <?php if(isset($_SESSION['email'])){ 
         ?>
         <li style="float:right;"><a href="../controller/logout.php">Logout</a></li>
        <?php } 
        else {?>
        <li style="float:right;" > <a href="/Hospital_Management/view/signin.php">Signin</a> </li>
        <?php } ?>
   
  </ul>


  </div>


</body>
</html>



<?php 
include 'component/header.php'; 
?>
<html>
<head>
	<title>Online Prescription</title>
	<style type="text/css">
    .error{
      color: red;
    }
  </style>
</head>
<body>
	<?php

$nameErr = $emailErr = $genderErr = $Prescription_Error= "";
$name = $email = $gender = $Prescription =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Please enter your patient name";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Please add your patient mail";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    
  
  if (empty($_POST["Prescription"])) {
    $Prescription_Error = "Please prescribe";
  } else {
    $Prescription = test_input($_POST["Prescription"]);
  }

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<form method="post" style="text-align: center; border: 1px solid black; padding: 10px;"	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  ">  
  <h1 style = "color: red;">ADD Prescription</h1>
 Patient Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
 
<textarea name="Prescription" placeholder="Prescription" rows="20"  cols="70"></textarea>
  <br><br>
 <button type="submit">send</button>  
</form>

<?php

echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $Prescription;


?>


    <?php 
        include 'component/footer.php'; 
    ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    .error{
      color: red;
    }
  </style>
</head>
<body>

<?php

$nameErr = $emailErr = $genderErr = $DOBErr= $degreeErr = $bloodgroupErr = "";
 
$name = $email = $gender = $DOB = $bloodgroup = $count = "";

$degree = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"]))
   {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = $_POST["email"];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
   if (empty($_POST["birthday"])) 
  {
    $DOBErr = "Date of Birth is required";
  } 

  else 
  {
    $DOB = test_input($_POST["birthday"]);
  }   
  

  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = $_POST["gender"];
  }

    if (empty($_POST["degree"]) ) 
  {
    $degreeErr = "Degree is required";
  } 
  else 
  {
    foreach($_POST['degree'] as $selected_degree)
  {
    $count++;
  }
    if ($count<2)
    {
      $degreeErr = "Must mark atleast two option";
    }
    
  }
  if (empty($_POST["blood_group"])) 
  {
    $bloodgroupErr = "Blood_Group is required";
  } 
  else 
  {
    $bloodgroup = test_input($_POST["blood_group"]);
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

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail:
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
   DOB: <input type="date" name="birthday">
  <span class="error">* <?php echo $DOBErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Degree:
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
  <input type="checkbox" name="degree[]" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>

  Blood Group:
  <select name="bloodgroup">
  <option></option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="a+") echo "checked";?> value="a+">A+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="a-") echo "checked";?> value="a-">A-</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="b+") echo "checked";?> value="b+">B+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="b-") echo "checked";?> value="b-">B-</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="o+") echo "checked";?> value="o+">O+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="o-") echo "checked";?> value="o-">O-</option>
   <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="ab+") echo "checked";?> value="ab+">AB+</option>
  <option name="bloodgroup" <?php if (isset($bloodgroup) && $bloodgroup=="ab-") echo "checked";?> value="ab-">AB-</option>
  </select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">

</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $DOB;
echo "<br>";

echo $gender;
echo "<br>";


echo $selected_degree. " ";
    
  
echo "<br>";

echo $bloodgroup;

?>

</body>
</html>

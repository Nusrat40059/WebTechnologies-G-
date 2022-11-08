<?php 
include 'component/header.php'; 
?>

<html>
<head>
	<title></title>
</head>
<body>

<h1> Scheduling Time</h1>
<form action="/action_page.php" id="form1">
  <label for="name">Patient name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="age">Age:</label>
  <input type="text" id="age" name="age"><br><br>
  <label for="problem">Problems:</label>
  <input type="text" id="problem" name="problem"><br><br>
   chooseAppointment Date&Time:
   <input type="datetime-local"><br>

  <input type="submit" value="Submit">
</form>

    <?php 
        include 'component/footer.php'; 
    ?>
</body>
</html>

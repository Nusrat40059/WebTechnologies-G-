<!DOCTYPE html>
<html>
<head>
<title>Search Product</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>
<body>
<fieldset style="width: 20%;">
<legend>SEARCH</legend>
<form method="post">
<input type="text" name="name" placeholder="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required> <hr>
<input type="submit" name="search" value="Search By Name">
</form>
</fieldset>
<?php
require 'Controller/search.php';
?>
</body>
</html>
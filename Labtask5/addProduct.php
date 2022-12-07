<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>
<body>
<form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data">
 
  <legend>ADD PRODUCT</legend>
<fieldset style="width: 15%;">
  <label for="name">Name</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingPrice">Buying Price</label><br>
  <input type="text" id="buyingPrice" name="buyingPrice"><br>

  <label for="sellingPrice">Selling Price</label><br>
  <input type="text" id="sellingPrice" name="sellingPrice"><br>

  <hr>

  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "saveProduct" value="Save">

 </fieldset>
</form>
</body>
</html>
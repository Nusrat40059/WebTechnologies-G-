<?php  
if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $products = showAllproducts();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Display Product</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>
<body>
<style>
table,td,th{
border:1px solid black;
    }
</style>
<fieldset style="width:15%;">
<legend>Display</legend>
<table>
<thead>
<tr>
<th>Name</th>
<th>Profit</th>
<th colspan="2">Edit&Delete</th>
</tr>
</thead>
<body>
<?php 
foreach ($products as $i => $product): 
if ($product['Display'] == "YES" || isset($_POST['name'])):
?>
<tr>

<td><?php echo $product['Name'] ?></td>
<td><?php echo $product['Selling Price'] - $product['Buying Price'] ?></td>
<td><a href="editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a></td>
<td><a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
</tr>
 <?php endif; endforeach; ?>
</body>
</table>
</fieldset>
</body>
</html>
<?php 
include 'component/header.php'; 
?>
<html>
<head>
	<title></title>
	<style >
	table{
		width : 1000px;
		margin :auto;
	}
	table ,tr,td{
	border:1px solid black;	
	border:collapse:collapse; 
	}
	td{
	text-align: center;
	padding:10px;
	}


	</style>
</head>
<body>
	<h1 style = "text-align: center;">View Appointment</h1>
	<table>
	<tr>
		<th>S.No</th>
		<th>Patient Name</th>
		<th>Age</th>
		<th>Patient ID</th>
		<th>Status</th>
		</tr>
<tr>
	<td>1</td>
    <td>Mr.Reza</td>
    <td>25</td>
    <td>45678</td>
    <td><a href="">accept</a></td>
    <td><a href="">reject</a></td>

 </tr>
 <tr>
	<td>2</td>
    <td>Mr.Sazin</td>
    <td>27</td>
    <td>45686</td>
        <td><a href="">accept</a></td>
    <td><a href="">reject</a></td>
 </tr>
 <tr>
	<td>3</td>
    <td>Mr.Tusher</td>
    <td>24</td>
    <td>45622</td>
        <td><a href="">accept</a></td>
    <td><a href="">reject</a></td>
 </tr>
 <tr>
	<td>4</td>
    <td>Nishat</td>
    <td>23</td>
    <td>45222</td>
        <td><a href="">accept</a></td>
    <td><a href="">reject</a></td>
 </tr>
 <tr>
	<td>5</td>
    <td>Mrs. Fatema</td>
    <td>28</td>
    <td>45699</td>
        <td><a href="">accept</a></td>
    <td><a href="">reject</a></td>
 </tr>
 <tr>
	<td>6</td>
    <td>Tasfia</td>
    <td>28</td>
    <td>45699</td>
        <td><a href="">accept</a></td>
    <td><a href="">reject</a></td>
 </tr>



	</table>

	<?php 
        include 'component/footer.php'; 
    ?>
</body>
</html>
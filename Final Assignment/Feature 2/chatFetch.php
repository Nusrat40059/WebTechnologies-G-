<?php
include_once('config.php');
$result= mysqli_query($conn , "SELECT * FROM chat");
while ($row = mysqli_fetch_assoc($result)){
	echo $row['chat_value']."<br>";
	
	}
?>
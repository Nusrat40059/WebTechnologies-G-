<?php
    session_start();

	if (isset($_SESSION['email'])) {
		session_destroy();
		header("location:/Hospital_Management/view/index.php");
	}
	else{
		header("location:/Hospital_Management/view/signin.php");
	}
?>
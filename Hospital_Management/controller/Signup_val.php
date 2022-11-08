<?php 
require_once '../model/signup_data.php'; 
    
    $name="";
	$err_name="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";

    $address=""; 
    $err_add=""; 
	$file=""; 
	$message=""; 
	$hasError = false ; 
	
	
	if ($_SERVER["REQUEST_METHOD"]== "POST")
    {

		if(empty($_POST["name"])){
			$hasError = true; 
			$err_name="** Name Required !";
		}
		else {
			if(strlen($_POST["name"]) <=3){
				$hasError = true;
				$err_name = " **name must be greater than 3 character";
			}
			else if(!preg_match("/^[a-zA-z]*$/",$_POST["name"]))
			{
				$hasError = true;
				$err_name = " **Only alphabets and whitespace are allowed";
			}
			else
			{
				$name= input_val($_POST["name"]);
			}

		}
		
		if (empty($_POST["gender"])) {
			$hasError = true;
			$err_gender = "** Gender is required";
		} 
		else {
			$gender = input_val($_POST["gender"]);
		}
		
			
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email="** Email Required !";
		}
		else{
			if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
				$hasError = true;
				$err_email ="** invalid email";
			}
			else
			{
				$email = input_val($_POST["email"]);
			}		
		}
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="** Phone number Required !";
		}
		else
		{
			if (!is_numeric($_POST["phone"])){
				$hasError = true;
				$err_phone = "** Number must be numeric !";
			}
			else if(!preg_match("/^[0-9]*$/", $_POST["phone"]))
			{
				$hasError = true;
				$err_phone = " **Only numeric value is allowed";
			}
			else{
				$phone = input_val($_POST["phone"]);
			}
			
		}

		if(empty($_POST["address"])){
			$hasError = true;
			$err_add="** Address is Required !";
		}
		else{
			$address = input_val($_POST["address"]);
		}
		
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass="password Required !";
		}
		
		else
		{
			if (strlen($_POST["pass"]) <=6){
				$hasError = true;
				$err_pass = "password must be greater than 6 character !";
			}
			else{
				$pass=input_val($_POST["pass"]);
			}
			
		}
		
		if(empty($_POST["conpass"])){
			$hasError = true;
			$err_conpass="Confirm password Required !";
		}
		
		else
		{
			if( $_POST["pass"] != $_POST["conpass"]){
				$hasError = true;
				$err_conpass=" Password not macthed ! ";
			}
			else{
				$conpass = input_val($_POST["conpass"]);
			}

		}

		if(!$hasError){

			if(isset($_POST["submit"]) )  
			{
				signup_tojson();
			}  
		}
	}


	function input_val($data){
		$data = trim($data); 
		$data = stripslashes($data); 
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>
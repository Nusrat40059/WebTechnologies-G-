<?php 

$email="";
$err_email="";
$pass="";
$err_pass="";
$hasError = false; 

if(isset($_COOKIE['email']) and isset($_COOKIE['pass']))
{
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
}
 
if ($_SERVER["REQUEST_METHOD"]== "POST"){
	
	if(empty($_POST["email"])){
		    $hasError = true;
			$err_email="Email Required !";
		}
	else{
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $hasError=true;
            $err_email =" invalid email !";
        }
        else
        {
            $email = $_POST["email"];
        }	
    }	
	
	if(empty($_POST["pass"])){
        $hasError = true;
	    $err_pass="password Required !";
    }
	else{
        if(strlen($_POST["pass"]) <= 6){
            $hasError = true;
		    $err_pass = "! password must be greater than 6 character";
	    }
        else
        {
            $pass=$_POST["pass"];
        }
    }
   
    if(!$hasError)
    {
        $file_name ="../JSON/User_data.json" ; 
        if(file_exists("$file_name")){
                
            $json_string = file_get_contents("$file_name");
            $parsed_json = json_decode($json_string, true);

            foreach($parsed_json as $key => $value)
            {
                if($email== $value['email'] && $pass == $value['pass']){         
                    if(isset($_POST['remember'])){
                        setcookie('email',$email,time()+60*60*7); //
                        setcookie('pass',$pass,time()+60*60*7); // [3600 * 7 ]
                    }
                    session_start();
                    $_SESSION['email'] = $email;
                    header("location:/Hospital_Management/view/profile.php");
                    
                }
                else{
                    echo "Email or Password is Invalid !<br>please   <a href='/Hospital_Management/view/signin.php'>try again</a><br><br>" ;
                }
            }
        }
    }
    else{
        echo "Something is wrong ! ";
    }
}
?>
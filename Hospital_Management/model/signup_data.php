<?php 

    function signup_tojson(){
       
            // Picture Upload 

            $target_dir = "Upload/";
			$filepath = $target_dir .  $_FILES["file"]["name"];
			if(move_uploaded_file($_FILES["file"]["tmp_name"],$filepath)){
				$a = "<img src=".$filepath." />"; 
				if(file_exists('../JSON/pic.json'))  
					{  
							$current_data = file_get_contents('../Json/pic.json');  
							$array_data = json_decode($current_data, true);  
							$extra = array(  
								'email'=> $_POST['email'],  
								'pic'=>$a
							);  
							$array_data[] = $extra;  
							$final_data = json_encode($array_data);  
							if(file_put_contents('../Json/pic.json', $final_data))
							{  
								$message = "<label class='text-success'>File uploaded successfully</p>";
							}
					}
				else  
				{  
						$error = 'JSON File do not exits';  
				}  
				
			}
			else{
				echo "Error !! " ;
			}

            // AllData Save .............

            $file_name ='../JSON/'. 'User_data'. '.json';

            if(file_exists("$file_name"))
                {
                    $current_data = file_get_contents("$file_name");
                    $array_data = json_decode($current_data,true);
                    $extra = array(
                        'name' => $_POST['name'],
                        'email' => $_POST['email'],
                        'gender' => $_POST['gender'],
                        'address' =>$_POST['address'],
                        'phone' => $_POST['phone'],
                        'pass' => $_POST['pass'],
                        'conpass' => $_POST['conpass']
    
                    );
                    $array_data[] = $extra;
                
                    $final_data = json_encode($array_data);
                    if(file_put_contents("$file_name",$final_data))
                    {
                        $message ="<label class='text-success'>File Signup Successfully</p>";
                        header("location:/Hospital_Management/view/signin.php");
                    }
                }
                else {
                    if(!file_exists("$file_name")){
                        $datae=array();
                        $datae[]=array(
                            'name' => $_POST['name'],
                            'email' => $_POST['email'],
                            'gender' => $_POST['gender'],
                            'address' =>$_POST['address'],
                            'phone' => $_POST['phone'],
                            'pass' => $_POST['pass'],
                            'conpass' => $_POST['conpass']
                        );
                        echo "file not exist<br/>";
                        $final_data = json_encode($datae);
                    }
                    if(file_put_contents("$file_name",$final_data))
                    {
                        $message ="<label class='text-success'>File Signup Successfully</p>";
                        header("location:/Hospital_Management/view/signin.php");
                    }
                }
    
			
    }

?>
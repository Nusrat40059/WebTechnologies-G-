<?php  
 include 'Home.php';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "Enter Name";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "Enter an e-mail";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "Enter a username";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "Enter a password";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "Confirm password field cannot be empty";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "Gender cannot be empty";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["un"], 
                     'pass'        =>     $_POST["pass"], 
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = " Enter Data successfully";
                }  
           }
           else
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  

<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
      </head>  
      <body>  
           <br> 
           <div class="container" style="width:500px;">  
                                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                     <fieldset>
                        <legend>REGISTRATION</legend> 
                     <label>Name</label>  
                   <div>  <input type="text" name="name" class="form-control" /><br /></div>  
                     <label>E-mail</label>
                    <div> <input type="email" name = "email" class="form-control" /><br /></div>
                     <label>User Name</label>
                     <div><input type="text" name = "un" class="form-control" /><br /></div>
                     <label>Password</label>
                    <div> <input type="password" name = "pass" class="form-control" /><br /></div>
                     <label>Confirm Password</label>
                     <div><input type="password" name = "Cpass" class="form-control" /><br /></div>

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>                     
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label><br>

                    <legend>Date of Birth:</legend>
                    <input type="date" name="dob"> <br><br>
                    </fieldset> 
                     
                    <input type="submit" name="submit" value="Submit" />
                    <input type="submit" name="reset" value="Reset" /><br />           
                    </fieldset>           
                    <?php  
                    if(isset($message))  
                    {  
                         echo $message;  
                    }  
                    ?>  
               </form>  
          </div>  
          <br />  
     </body>  
</html>
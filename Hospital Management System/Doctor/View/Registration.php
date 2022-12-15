<?php 

include("Navigation2.php");
?><html>
    <head>
        
        <title>Add New Doctor</title>
        <script src="..\Controller\JS\RegValidation.js"></script>
        <link rel="stylesheet" href="../asset/css/design2.css">
    </head>
    <body>
        <form action = "../Controller/RegistrationCheck.php" onsubmit=" return Validation()" method = "post" enctype="">
            <fieldset>
                <legend>
                Add New Doctor
                </legend>
                
            <table>
            <tr>
                    <td>
                        Name:
                    </td>
                    <td> 
                        <input type = "text" name = "name" id="name" value = ""/>  
                        <p id="ErrName" style="color: red;" ></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                    <input type = "text" name = "username" id="username" value="" /> 
                        <p id="ErrUName" style="color: red;"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                    <input type = "password" name = "password" id="password" value="" />  <p id="ErrPass" style="color:red;"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        Email:
                    </td>
                    <td> 
                        <input type = "text" name = "email" id="email" value = "" />  <p id="ErrMail" style="color: red;"></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        Contact:
                     </td>
                    <td>
                         <input type = "text" name = "phone" id="phone" value = "" />  <p id="ErrMobile" style="color: red;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        Speciality:
                     </td>
                    <td>
                         <input type = "text" name = "speciality" id="speciality" value = "" placeholder=""/>  <p id="ErrSpec" style="color: red;"></p>
                    </td>
                </tr>
                

                <tr>
                    <td>
                        Gender: 
                    </td>
                    <td> 
                        <input type = "radio" name = "gender" value = "Male"/> Male
                        <input type = "radio" name = "gender" value = "Female"/> Female
                       <p id="Errgender" style="color: red;"></p>
                    </td>
                </tr>

            </table>
            <br>
            <input type = "submit" name ="" value = "Add Doctor">
            <a href="Login.php">Login</a>

            </fieldset>  
        </form>
    </body>
</html>
<?php

if (isset($_POST["submit"])) {
    $UserName=$_REQUEST['Username'];
    $A_Time=$_REQUEST["time"];
    $A_Date=$_REQUEST["date"];
    $Speciality=$_REQUEST["speciality"];

    $connection = new doctorsdb();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->AddAppointment($conobj,$_SESSION["Username"],$A_Time,$A_Date,$Speciality);
    header("Location: ../View/Appointment.php");


}


?>
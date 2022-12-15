<?php
include "../Model/doctorsdb.php";

$name=$_POST["Search"];

if($name=="")
{
    echo "";
}

else
{

    $connection=new doctorsdb();
    $conobj=$connection->OpenCon();
    $result=$connection->Search($conobj,$name);

    if ($result->num_rows > 0)
    {   while($row = $result->fetch_assoc()) {
        echo "Patient Name : <b>".$row["PatientName"]."</b><br>";
        echo "Phone Number : <b>".$row["Phone"]."</b><br><br>";

    }

    }

    else{
             echo "No Result Found";
    }
    $connection->CloseCon($conobj);
}




?>
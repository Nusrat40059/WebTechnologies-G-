<?php
include "../Model/db.php";

$name=$_POST["Search"];

if($name=="")
{
    echo "";
}

else
{

    $connection=new db();
    $conobj=$connection->OpenCon();
    $result=$connection->Search($conobj,$name);

    if ($result->num_rows > 0)
        { 
            while($row = $result->fetch_assoc())
            {
                echo "Equipement Name : <b>".$row["Name"]."</b><br>";
                echo "Price : <b>".$row["Price"]."</b><br><br>";

            }

    }

    else{
             echo "No Result Found";
    }
    $connection->CloseCon($conobj);
}




?>
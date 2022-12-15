<?php 
include("header.php");
?>

<html>
<head>
	<title>Patients</title>
</head>
<body>
        <center>
            <h2><b><i> Patients List! </i></b></h2>
            

            <table border="4", width = "60%">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Speciality</th>
            </tr>
            <?php
                include("../Model/db.php");
                
                $connection = new db();
                $conobj=$connection->OpenCon();
                $userQuery=$connection->PatientList($conobj);
                
                if ($userQuery->num_rows > 0) {
                
                    // output data of each row
                    while($row = $userQuery->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["PatientName"]."</td>";
                        echo "<td>".$row["Age"]."</td>";
                        echo "<td>".$row["Phone"]."</td>";
                        echo "<td>".$row["Speciality"]."</td>";

                        echo "</tr>";
                      
                  } 
                }
                
                ?>



            
		</table>
        <br>
        </center>
</body>
</html>
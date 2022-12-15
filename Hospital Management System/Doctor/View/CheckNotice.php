<?php 
include("Navigation.php");
?>

<html>
<head>
	<title>POST NOTICE</title>
</head>
<body>
        <center>
            <h2><b><i> NOTICES! </i></b></h2>
            

            <table border="4", width = "60%">
            <tr>
                <th>Subject</th>
                <th>Notice</th>
            </tr>
            <?php
                include("../Model/doctorsdb.php");
                
                $connection = new doctorsdb();
                $conobj=$connection->OpenCon();
                $userQuery=$connection->ShowNotice($conobj);
                
                if ($userQuery->num_rows > 0) {
                
                    // output data of each row
                    while($row = $userQuery->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["Title"]."</td>";
                        echo "<td>".$row["Body"]."</td>";

                        echo "</tr>";
                      
                  } 
                }
                
                ?>



            
		</table>
        <br>
        </center>
</body>
</html>
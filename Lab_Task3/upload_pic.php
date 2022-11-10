<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Picture</title>
</head>
<body>  
        <div class="container" style="width:500px;">
<?php
    if(!isset($_POST['submit']))
    {
        $a = "<img src='icon.jpg'>";
        echo "$a";
    }
    else if(isset($_POST['submit']))
    { 
        $filepath = "image/" . $_FILES["file"]["name"];
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
        {
            $a = "<img src=".$filepath.">";

            if(file_exists('pic.json'))  
            {  
                    $current_data = file_get_contents('pic.json');  
                    $array_data = json_decode($current_data, true);  
                    $extra = array(  
                        'name'               =>     $_SESSION['name'],  
                        'pic'          =>     $a
                    );  
                    $array_data[] = $extra;  
                    $final_data = json_encode($array_data);  
                    if(file_put_contents('pic.json', $final_data))
                    {  
                        $message = "<label class='text-success'>File uploaded successfully</p>";
                    }
            }
           else  
           {  
                $error = 'JSON File dont exits';  
           }  
            echo "$a";
        } 
        else 
        {
            echo "Error !!";
        }
    }
    ?>

    <form action="upload_pic.php" enctype="multipart/form-data" method="post">
    <input type="file" name="file"><br>
    <input type="submit" value="Upload" name="submit">
    </form>

    </div>
</body>
</html>
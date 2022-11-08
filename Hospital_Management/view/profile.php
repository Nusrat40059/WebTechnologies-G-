<?php 
include 'component/header.php'; 
$dtls = file_get_contents('../JSON/User_data.json');
$dtlsOK = json_decode($dtls); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <div style="width:100%; height:60px;text-align:center;">
        <h2 style="font-weight:700; font-size:45px;">Doctor Profile Page </h2> 
      
    </div>
    <div style="width:100%;text-align:center;">
        
        
    </div>

    <div class="card" style="margin-top:20px;padding-top:5px;margin-bottom:30px;">  
        <h4 style="font-size:35px;font-weight:600;" >Profile</h4> 
        <div style="margin-left:0px;" >
            
            <?php
                if(file_exists('../JSON/pic.json'))
                {
                    $pic = file_get_contents("../JSON/pic.json",true);
                    $pic = json_decode($pic, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                    
                    foreach($pic as $item){?>
          
                    <?php 
                        if($item["email"] == $_SESSION["email"])
                        {
                            $img = $item['pic'];
                            echo $img;
                            // echo '<img src=" '.$item['pic'].' ">';
                        
                    ?>
                    <?php 
                        }
                        else
                        {
                            $error = "<label class='text-danger'>pic could not found</label>";
                        }
                    }
                }
            ?>
           
        </div>

         <div>       
            <?php foreach($dtlsOK as $key => $ok){

                if($_SESSION["email"] == $ok->email){ 
                ?>   
                        
                            <div class="container">
                                <h4>Email: <?= $ok->email; ?></h4>
                                <h4><b>Name: <?= $ok->name;?></b></h4>
                                <h5>Contact:<?=$ok->phone; ?></h5>
                                <h5>Gender : <?=$ok->gender; ?></h5>
                                <h5>Address : <?=$ok->address;?></h5>
                            </div>
                    
                <?php
                }
            } ?> 
        </div>
    </div>
    
    <?php 
        include 'component/footer.php'; 
    ?>
</body>
</html>
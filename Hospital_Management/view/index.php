<?php 
include 'component/header.php'; 
    $dtls = file_get_contents('../JSON/User_data.json');
    $dtlsOK = json_decode($dtls); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Data</title>
    <link rel="stylesheet" type="text/css" href="style/header.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
</head>

<body>    
    <div>
        <h2 style="color:#03831F;text-align:center;fontsize:45;fontweight:700; margin-bottom:60px;">Welcome To Hospital Management System </h2> 
    </div>
    <div style="display:flex;flex-wrap:wrap;width:100%;">
    <?php foreach($dtlsOK as $ok ){?>

        <div class="card" style="margin-top:20px;">
                <h2 class="title">All User Details</h2>
                <img src="../assets/signup.webp" height:"150px;" width:"150px;"/>
                <div class="container">
                    <h4><?= $ok->email; ?></h4>
                    <h4><b><?= $ok->name;?></b></h4>
                    <h5><?=$ok->email; ?></h5>
                    <h5><?=$ok->phone; ?></h5>
                    <h5><?=$ok->gender; ?></h5>
                    <h5><?=$ok->address;?></h5>
                </div>
        </div>
            
    <?php }?>
    </div>
    
    <?php 
        include 'component/footer.php'; 
    ?>
</body>
</html>
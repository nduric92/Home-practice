<?php
session_start();
//echo '<pre>';
//print_r($_SESSION);
//echo '</pre>';

if(!$_SESSION['auth']){
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'head.php'; ?>
</head>
<body style="background-image:url(slike/body2.jpg);">
    <div class="container">
        <div class="container text-center" style="background-color:darkgrey;">
            <div class="row">
                <img src="slike/pp.jpg" alt="" height="300px">      
            </div>
            <?php include_once 'navbar.php'; ?><br>

            
        </div>    
    </div>

    <?php include_once 'footer.php'; ?>
    <?php include_once 'skripte.php'; ?>
</body>
</html>
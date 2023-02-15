<?php
session_start();
if(!$_SESSION['auth']){
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'head.php'; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radnici</title>
</head>
<body>
    <div class="grid">
        <nav class="navbar">
            <div class="navname">Plast Product                    
            </div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#" class="active">Radnici</a></li>
                        <li><a href="#">Smjene</a></li>
                        <li><a href="#">Proizvodi</a></li>
                        <li><a href="#">Proizvodnja</a></li>
                        <li><a href="logout.php">LogOut</a></li>
                    </ul>
            </div>
        </nav>        
    </div>
</body>
</html>
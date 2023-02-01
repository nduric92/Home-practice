<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index php</title>
</head>
<body>

<ul class="submenu menu vertical" data-submenu>
          <li><a href="">gledaj dalje</a>
            <ul class="submenu menu vertical" data-submenu>
            <li><a href="ifstatment.php">IF statment</a></li>
            <li><a href="loop.php">While/do while/for/foreach loop</a></li>
            <li><a href="functions.php">Functions</a></li>
            <li><a href="superglobals.php">Superglobals</a></li>
            <li><a href="superglobalsdodatno.php">Superglobals dodatno</a></li>
          </li>
</ul>

<hr>

<?php
//Creating working upload system

if(isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; //trazi ime FAJLA
    $tmp_name = $_FILES['file']['tmp_name'];//trazi privremenu lokaciju fajla
    $size = $_FILES['file']['size'];//trazi velicinu fajla
    $error = $_FILES['file']['error'];//trazi greske

    $tempExtension = explode('.', $name);//explode from punctuation mark

    $fileExtension = strtolower(end($tempExtension));

    //allowed extensions
    $isAllowed = ['jpg', 'jpeg','png','pdf'];

    //0 = no errors - 1 = error
    if(in_array($fileExtension, $isAllowed)){
        if($error===0){
            if($size < 100000){
                $newFileName = uniqid('',true) . '.' . $fileExtension;
                $fileDestination = 'uploads/' . $newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                header('Location: files.php?uploadedsuccsess');
            }else{
                echo 'Sorry, your file size is too big';
            }
        }else{
            echo 'Sorry, there was an error! Try it again';
        }
    }else {
        echo 'Sorry, your file is not accepted';
    }

}





?>

</body>
</html>
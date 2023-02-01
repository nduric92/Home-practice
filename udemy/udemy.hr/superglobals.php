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
            <li><a href="files.php">Files</a></li>
            <li><a href="superglobalsdodatno.php">Superglobals dodatno</a></li>
          </li>
</ul>

<hr>



<?php
//PRIMER ZA COOKIE => POGLEDAJ ISPOD NIZE
//$time=time() + 86400 * 30;  //br sekundi u danu puta trideset dana- mesec dana trajanja cookie-a
//setcookie('name', 'Nemanja', $time);


//Superglobals - najkoristenjiji superblobalsi

// GLOBALS
// $_POST
// $_GET
// $_SERVER
// $_COOKIE
// $_SESSION
// $_FILES



//========================//
//  Superglobal GLOBAL    //
//========================//

$x=100;
$y=200;

function add() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $z . '<hr>';


//======================//
//  Superglobal POST    //
//======================//

//POST
//Collect data from the HTML form (invisible)

if (isset($_POST)) {
    echo $_POST['name'] . ", your form is submitted";
}


//ispisuje array na stranici
echo"<br>";
print_r($_POST);
 
?>

<form action="superglobals.php" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type="submit">SUBMIT</button>
</form>

<hr><hr><br>




<?php

//=====================//
//  Superglobal GET    //
//=====================//

//GET
// Data will be visible in the URL

//radi na slican nacin kao sa predavanja, unosimo na stranicu izbacuje u URL

?>

<form action="superglobals.php" method="get">
    <input type="text" name="name">
    <input type="password" name="password">
    <button type="submit">SUBMIT</button>
</form>




<hr><hr><br>
<?php
//=========================//
//  Superglobal SESSION    //
//=========================//


//Good to use for sensitive information
//Session exists as long as the browser is open

session_start();

//Storing information
$_SESSION["Name"] = "Nemanja";
$_SESSION["Age"] = 24;

echo "Hello " . $_SESSION["Name"];

session_destroy();

echo "Hello " . $_SESSION["Name"];
echo '<hr><hr>';


//========================//
//  Superglobal COOKIE    //
//========================//

// Small file that the webserver stores in the client computer

//ARGUMENTS COOKIES
//Name      OBAVEZAN
//Value     OBAVEZAN
//Expire    OBAVEZAN
//Path
//Domain
//Security

//If you do not include an expiration date, the cookie will only be stored for the current session

//SVE VEZANO ZA COOKIE STO SE FUNKCIJA TICE SE POSTAVLJA NA VRHU
$time=time() + 86400 * 30;  //br sekundi u danu puta trideset dana- mesec dana trajanja cookie-a
setcookie('name', 'Nemanja', $time);

print_r($_COOKIE);

echo '<br>';
echo $_COOKIE['name'];

echo '<hr><hr>';


//=======================//
//  Superglobal FILES    //
//=======================//

//How to upload files
//1. Upload it to the root
//2. Directly to the database

//enctype="multipart/form-data
//Specifies how the form data should be encoded

echo $name = $_FILES['file']['name'] . '<br>';
echo $type = $_FILES['file']['type'] . '<br>';
echo $tmp_loacation = $_FILES['file']['tmp_name'] . '<br>';
echo $error = $_FILES['file']['error'] . '<br>';


?>


<form action="superglobals.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">SUBMIT</button>
</form>


</body>
</html>
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
            <li><a href="functionsvezba.php">Functions vezba</a></li> 
            <li><a href="buildinfunctions.php">Build in functions</a></li>
          </li>
</ul>
<hr>

<?php 
//==========================//
//  matematicke funkcije    //
//==========================//

//  CEIL
echo ceil(1.50) . '<br>';       //ispisuje br 2, podize na prvi sledeci celi br

//FLOOR
echo floor(1.50) . '<br>';      //ispisuje br 1, spusta na prvi nizi celi br

//ROUND
echo round(0.54335, 2) . '<br>'; //ispisuje samo dva broja decimala jer smo tako uneli u zagradu kao drugu vrednost

echo exp(4);

echo '<hr>';

//==============================//
//  string build-in functions   //
//==============================//


// STRING LENGHT
$str = 'Today is a sunny day';

strlen($str); //counts nummber of caracters in variable



//STRING WORD COUNT
$firstName = 'My first name is Nemanja';

echo str_word_count($firstName) . '<br>';



// how to find text within a string

$email = 'info@nemanjaduric.com';
if(strpos($email,'@')){
    echo 'This is a valid email';
}else{
    echo 'This is a email input field';
}
echo '<hr>';


//UCwords - every first letter of a word is uppercase

echo ucwords('what is your name' . '<br>');

//whole string to uppercase

echo strtoupper('what is your name' . '<br>');

//whole string to lowercase

echo strtolower('what is your name' . '<br>');

//=============================//
//  Array build-in functions   //
//=============================//









?>
    
</body>
</html>
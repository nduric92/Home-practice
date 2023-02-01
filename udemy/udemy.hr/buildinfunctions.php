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
            <li><a href="superglobals.php">Superglobals</a></li>
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

echo '<hr>';

//=============================//
//  Array build-in functions   //
//=============================//

//ARRAY FUNCTION

$personalInfo = ['Name' => 'Nemanja', 'Age' => 30, 'City' => 'Vukovar'];

$moreInfo = ['State' => 'Hrvatska', 'Weight' => 88];

$personalInfo = array_merge($personalInfo, $moreInfo);
foreach($personalInfo as $key => $value){
    echo $key . ': ' . $value . '<br>';
}

echo'<hr>';

//print only keys
print_r(array_keys($personalInfo));

echo 'Print only keys';
echo'<hr>';

//print only values
print_r(array_values($personalInfo));

echo 'Print only values';
echo'<hr>';

//add value in array
$cars = ['Volkswagen', 'Audi', 'Mercedes'];
array_push($cars, 'Volvo', 'Toyota');

print_r($cars);
echo 'dodavanje marke auta u array sa "array_push"' . '<hr>';

//search inside of an array
echo array_search('Mercedes', $cars);
echo '<hr>';

//Count the number of items in array
echo count($cars);
echo '<hr>';
echo '<hr>';

//=================================//
//  Date/time build-in functions   //
//=================================//

//DATES

//  'd' =   dan
//  'j' =   dan bez nula
//  'D' =   dan u nedelji (Mon, Fri...)
//  'l' =   pun dan u nedelji (Monday...)
//  'm' =   Mesec kao broj sa nulom ukoliko postoji
//  'n' =   Mesec kao broj bez nule
//  'M' =   Mesec tri slova (Jan)
//  'F' =   Mesec pun naziv (January..)
//  'y' =   Godina dve znamenke (23)
//  'Y' =   Godina cetri znamenke (2023)


echo date('M');
echo '<hr>';

echo date('d/m/Y');
echo '<hr>';

//TIMES

//  'g' =   sati in 12 hour format bez nula
//  'h' =   sati in 12 hour format sa nulama
//  'G' =   sati u 24 satnom formatu bez nula
//  'H' =   sati u 24 satnom formatu sa nulama
//  'a' =   am/pm malim slovima
//  'A' =   am/pm velika slova
//  'i' =   minute bez numfmt_get_locales sekunde bez nula

echo date('H:i:s a');

//funkcija za definiranje timezone

date_default_timezone_set('Europe/Zagreb');

//string to time

$time = strtotime('4:00pm December 03 2022');
echo '<br>';
echo $time;

echo '<br>';
echo date('m/d/Y H:i a', $time);

echo '<hr>';
//=====================================//
//  Random number build-in functions   //
//=====================================//

$min = 10;
$max = 100;
echo rand($min,$max);


?>
    
</body>
</html>
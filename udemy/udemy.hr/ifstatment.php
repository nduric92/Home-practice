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
          <li><a href="index.php">Pocetna index</a>
            <ul class="submenu menu vertical" data-submenu>
            <li><a href="ifstatment.php">IF statment</a></li>
            <li><a href="loop.php">While/do while/for/foreach loop</a></li>                        
</ul>


<hr>
<hr>


<?php 


//--------------//
// if statement //
//--------------//

$x = 10;
$y = 15;

if ($x < $y) {
    echo 'This is true';
} else {
    echo 'This is false';
}

echo '<hr>';

//spaceship
//ako je vrednost levo manja od vrednosti levo sistem vraca minus 1(-1)
//ako je vrednost levo jednaka vrednosti destno sistem vraca 0
//ako je vrednost levo veca od vrednosti desno sistem vraca 1

echo 1<=>1;  //0
echo '<br>';

echo 1<=>2;  //-1
echo '<br>';

echo 2<=>1;  //1
echo '<br>';

echo '<hr>';

//-------------------//
// logicki operatori //
//-------------------//

$x=5;
$y=10;

if ($x == $y){
    echo 'true';
} else {
    echo 'false';
} // FALSE


// logicki operatori && == === ! || 

echo '<hr>';

//---------------------//
// inkrement dekrement //
//---------------------//

//  ++$x    pre increment
//  $x++    post increment
//  ++$x    pre decrement
//  $x--    post decrement

$x =5;

echo --$x; //4


echo '<hr>';

//-----------------------//
// CONDITIONAL STATEMENT //
//-----------------------//

$age = 19;

if($age < 18){
    echo 'sorry you are too young!';
}else {
    echo 'mozes u izlazak';
}

echo '<hr>';

$age = 19;

if($age < 18){
    echo 'Premlad/a si da ides!';
} elseif($age == 18) {
    echo 'pitaj roditelje';
}else {
    echo 'mozes u izlazak';
}

echo '<hr>';
//-----------------------//
// CONDITIONAL STATEMENT //
//   switch statement    //
//-----------------------//


$role = 'employee';

switch($role){
    case 'visitor':
        echo 'welcome visitor';
    break;
    case 'admin':
        echo 'welcome admin';
    break;
    case 'superadmin':
        echo 'welcome superadmin';
    break;
    case 'boss':
        echo 'welcome boss';
    break;
    default:
        echo 'user has no role';
}









?>
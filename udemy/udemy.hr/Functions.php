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
            <li><a href="buildinfunctionsvezba.php">Build in functions vezba</a></li>
            <li><a href="superglobals.php">Superglobals</a></li>
          </li>
</ul>

<hr>



<?php
//Camel case
//svaku rec posle prve reci stavljamo sa velikim slovom
//myFunction();

//mala slova
//sva mala slova sa donjom crtom
//my_function();

//pascal case
//sva prva slova velika
//MyFunction();

//==========================//
//  Kreiranje prve funkcije //
//==========================//

function myFunction(){
  $x = 'Hello';
  echo $x;
}

myFunction();

//KORISNA ZA MENE U OVOM FAJLU
function linija(){
  echo '<hr>';
}

linija();

//======================================//
//  Functions with arguments/paremeters //
//======================================//

$num1=5;
$num2=5;

//parametri
function calculator($num1, $num2 = 20){
  echo $num1 * $num2;
}

//arguments - argumenti u samoj funkciji overwritaju varijable koje su navedene iznad same funkcije
calculator($num1, $num2);

linija();


//============================//
//  funkcije sa return value  //
//============================//



$num1 = 10;
$num2 = 15;
function add($num1, $num2){
  echo $num1 + $num2;
}

add($num1, $num2);

linija();

//drugaciji nacin pomocu return-a 
$num1 = 10;
$num2 = 15;

function add1($num1, $num2){
  $result = $num1 + $num2;
  return $result;
}

// - add1($num1, $num2); - ovo ne radi na ovaj nacin nego mora sa echo...
echo 'Rezultat je ' . add1($num1, $num2); //na ovaj nacin se ispisuje rezultat na stranici

linija();


      //------------------//
      //pass by reference //    
      //------------------//    //pogledaj razliku izmeju jednog nacina i drugog =>


$x = 10;

function addByValue($x){        //samo koristi vrednost varijable x i ne dodaje joj zadanih +=5
  $x += 5;
}

function addByReference(&$x){   //uzima vrednost varijable x koja je gore navedena $x=10 i dodaje 10
  $x+=10;
}

addByValue($x);
echo 'The value is ' . $x;    //=10

  linija();

addByReference($x);           
echo 'The value is ' . $x;    //=20

linija();

//=================================//
//  Global and local scope in PHP  //
//=================================//

$x = 10;
$y = 20;

function MojaFunkcija1(){
  echo $y = 20;
}

// echo $y; //ova ne radi jer nije varijabla definirana

MojaFunkcija1(); //pozivas funkciju u kojoj je definirana varijabla y

linija();

MojaFunkcija1($y);//radi i ovako 

linija();
linija(); 

//=============//
//  CONSTANTS  //
//=============//

// function - define
//keyword - CONST

//DEFINE//

$companyName = 'Apple';
$companyName = 'Microsoft';

echo $companyName;    //ispisuje samo Microsoft

linija();
//konstante UVEK velikim slovom
define('COMPANY_NAME', 'Apple');

echo COMPANY_NAME;    //Ispisuje - Apple i u echo slucaju se ne upisuje znak dolara ispred

linija();

const MY_NAME = 'Nemanja';    //definira konstantu MY_NAME
echo MY_NAME;


//=======================//
//  INCLUDING DOCUMENTS  //
//=======================//

//  include_once 'head.php';    sve ono sto smo radili da razdvajamo footer, header, navbar...
//  u ovom primeru na udemy stoji samo - include 'head.php' bez once

linija();

//=====================//
//  REQUIRE DOCUMENTS  //
//=====================//

//  ako koristimo INCLUDE i ako ga nema, recimo da je put navedem pogresno - na stranici isipisuje warning
//  ako koristimo REQUIRE i ako ga nema, recimo da je put naveden pogresno - na stranici ispisuje fatal error













?>
    
</body>
</html>
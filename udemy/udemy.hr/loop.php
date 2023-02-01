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
            <li><a href="ciklicna.php">ciklicna</a></li>
            <li><a href="Functions.php">Functions</a></li> 
            <li><a href="superglobals.php">Superglobals</a></li>                      
</ul>


<hr>
<hr>


<?php 
//--------------//
//  while loop  //
//--------------//

$x=1;
while ($x <= 10){
    echo $x . '<br>';
    $x++;
}

echo '<hr>';

$x=1;
while ($x <= 10){
    echo $x++ *2 . '<br>';
}

echo '<hr>';

//----------------//
// do while loop  //
//----------------//

$cookie = 1;
do{ 
    echo 'I love cookies <br>';
    $cookie++;
}while($cookie <1);
//u do while petlji prvo ispisuje echo tek onda proverava uslov kasnije




echo '<br>';
//u while petlji proverava uslov te tek onda ispisuje echo ukoliko je true
while ($cookie <1){
    echo 'I love cookies <br>';
    $cookie++;
}//ovde ga ne ispisuje jer cookie je u varijabli postavljen na jedan
//u while petlji je uslov : ako je cookie manji od 1 - znaci ne ispisuje ga


echo '<hr>';

//----------------//
//   FOR loop     //
//----------------//

$deposit = 1000;
$rate = 0.05;

for($years = 1; $years<=5; $years++){
    $deposit += ($deposit * $rate); // ovo je jednako izrazu : $deposit = ($deposit * $rate) + $deposit;
    echo $years . $deposit . '<br>';
}

echo '<hr>';
echo '<hr>';
echo '<hr>';

$n=5;
$m=5;
$matrica =[];

$n=isset($_GET['prvi'])?$_GET['prvi']:5;
$m=isset($_GET['drugi'])?$_GET['drugi']:5;

for($i=0; $i < $n; $i++){
    $red=[];
    for($j=0; $j <= $m; $j++){
        $red[]=$j;

    }$matrica[]=$red;
}


for($i=0; $i<$n; $i++){
    for($j=1; $j<=$m; $j++){
        echo $matrica[$i][$j]. ' ';
    }
    echo '<br>';
}


echo '<hr>';
echo '<hr>';
echo '<hr>';
//--------------------//
//   FOREACH loop     //
//--------------------//

$names = ['John', 'Nemanja', 'Filip'];
$persons = ['Name'=>'Dary','Age' => 30, 'Gender' => 'Male'];

foreach($persons as $details => $value){
    echo $details . ': ' . $value . '<br>';
}


echo '<hr>';

foreach($names as $key) {
    echo 'My name is ' . $key . '<br>';

}

echo '<hr>';
echo '<hr>';
//========//
//PRACTICE//
//========//

$x =19;
$y =10;

if ($x<=$y){
    echo 'x je manje ili jednak ' . $y . '<br>';
    echo 'x je ' . $x . '<br>';
}else{
    echo 'x je veci od ' . $y . '<br>';
    echo 'x je ' . $x;
}

echo '<hr>';

//  SWITCH  //
$x=5;

switch($x){
    case 1:
        echo 'Vukovar';
        break;
    case 2:
        echo 'Kristiansand';
        break;
    case 3:
        echo 'Novi Sad';
        break;
    case 4:
        echo 'Dubrovnik';
        break;
    default:
        echo 'Gotov si';
}

// 3
echo '<hr>';

$score=60;

if($score >=90 && $score <=100){
    echo 'You have passed the exam with an A' . '<br>'; 
}elseif ($score >= 80 && $score<89){
    echo 'yoo have passed the axam with an B' . '<br>';
}elseif ($score >= 70 && $score<79){
    echo 'yoo have passed the axam with an C' . '<br>';
}elseif ($score >= 60 && $score<69){
    echo 'yoo have passed the axam with an D' . '<br>';
}else {
    echo 'You failed the exam';
}


// 4
echo '<hr>';

$hours = 11000;
$age = 10;
$failures = 20;

if($hours>= 10000 || $age >= 12 || $failures >= 25){
    echo 'Machine has to be replaced';
    }else {
        echo 'Machine is still good to work';
    }


// 5
echo '<hr>';

$year = 2023;

if ($year % 400 ==0 || $year % 4 == 0){
    echo $year . ' is a leap year';
} else {
    echo $year . ' is not a leap year';
}

// 6
echo '<hr>';

$x=1;
$y=15;

while($x <= $y){
    $multiple = $x * $y;
    echo $x . ' * ' . $y . ' is ' . $multiple . '<br>';
    $x++;
}

// 7
echo '<hr>';

$num1 = 0;
$num2 = 1;
$counter = 0;

while($counter < 11){
    echo ' ' . $num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter++ ;
    echo '<br>';
}







?>
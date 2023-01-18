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








?>
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
</ul>
<hr>
<?php 

//1//

$price=100;
$vat=0.25;

function calculateVat($price, $vat){
    $calculatedPrice = ($price * $vat) + $price;
    return $calculatedPrice;
}

echo 'Price: ' . $price . '<br>';
echo 'Vat: ' . $vat . '<br>';
echo 'Total price: ' . calculateVat($price, $vat) . '<hr>';


//2//

$year=2024;

function leapYear($year){
    if($year % 400 === 0 || $year % 4 ===0){
        return true;
    }else{
        return false;
    }
}

if(leapYear($year)){
    echo $year . ' is a leap year';
}else{
    echo $year . ' is not a leap year';
}

echo '<hr>';

//3//

$num1=10;
$num2=15;

function addNumbers($num1, $num2){
    return $num1 + $num2;
}

function subtractNumbers($num1, $num2){
    return $num1 - $num2;
}

function multiplyNumbers($num1, $num2){
    return $num1 * $num2;
}

function divideNumbers($num1, $num2){
    return $num1 / $num2;
}

echo 'Addition of ' . $num1 . ' and ' . $num2 . ' is ' . addNumbers($num1, $num2) . '<br>';
echo 'Subtraction of ' . $num1 . ' and ' . $num2 . ' is ' . subtractNumbers($num1, $num2) . '<br>';
echo 'Multiplycity of ' . $num1 . ' and ' . $num2 . ' is ' . multiplyNumbers($num1, $num2) . '<br>';
echo 'Division of ' . $num1 . ' and ' . $num2 . ' is ' . divideNumbers($num1, $num2) . '<hr>';

//4//

$num1=10;
$num2=15;

function swapNumbers($num1, $num2){
    $temp=$num1;
    $num1=$num2;
    $num2=$temp;

    echo 'After swapping num 1 = ' . $num1 . ' num 2 = ' . $num2;
}

swapNumbers($num1, $num2);

echo '<br>';

echo 'Nakon zamene brojeve, $num1 dobija pocetnu vrednost varijable $num2, i obratno' . '<hr>';

//5//
$num1=9;

function evenOrNot($num1){
    if($num1 % 2 ==0){
        echo $num1 . ' is even';
    }else{
        echo $num1 . ' is not even';
    }
}

evenOrNot($num1);
echo '<hr>';

//6//

$num1=3;

function isPrime($num1){
    if($num1 === 1){
        return false;
    }else{
        for($i = 2; $i<$num1/2; $i++){
            if($num1 % $i ==0){
                return false;
            }
        }
        return 1;
    }
}


if(isPrime($num1)){
    echo 'Number ' . $num1 . '  is a prime';
}else{
    echo 'Number ' . $num1 . ' is not a prime';
}



?>
    
</body>
</html>
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

$numbers = ['Milk' => 1, 'Bread' => 2, 'Cheese' => 4, 'Fruit' => 6];

arsort($numbers);
print_r($numbers);

echo '<hr>';


//2//

$targetDays = mktime(0, 0, 0, 8, 23, 1992);

$today = time();

$difference = ($today - $targetDays);

$days = (int)($difference / 86400);

echo 'Dani od rodjenja: ' . $days;

echo '<hr>';


//3//

$randnumber = rand(0,100) / 10;

echo $randnumber;

echo '<hr>';


//4//

$string = 'My name is Nemanja, Im 30 and learninh PHP coding';
function lowercaseCheck($string) {
    echo strtolower($string);
}

lowercaseCheck($string);

echo '<hr>';


//5//

$str = 'My name is Nemanja. Im 30 and learninh PHP coding. I live in Vukovar but the school that im going to is in Osijek';

$punctuation = 0;

function searchtext ($str, $punctuation){
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i]=='.'){
            $punctuation++;
        }
    }
    echo 'Text has ' . $punctuation . ' punctuation';
}

searchtext($str, $punctuation);

echo '<hr>';

//6//

$onlyNumbers = [5,6,7,11,5,9,41,3];

echo 'The lowest nummber is ' . min($onlyNumbers) . ' and the highest nummber is ' . max($onlyNumbers);

echo '<hr>';

//7//

$str = 'Nemanja';

echo str_repeat($str, 8);
?>
    
</body>
</html>
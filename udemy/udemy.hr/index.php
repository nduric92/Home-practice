<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index php</title>
</head>
<body>

<?php 

//asocijativni nizovi associative arrays

$cars = array("Audi"=> 50.500, "bmw" => 40.700, "Mercedes"=> 60.300);
print_r($cars);

echo '<hr>';

$car1["mercedes"] = 60.300;
echo $car1["mercedes"];




echo '<hr>';




//FOREACH primer
foreach ($cars as $key => $value) {
    echo 'My ' . $key . ' has ' . $value . ' mileage <br>';
}




echo '<hr>';
$automobili=['audi' => 174000, 'bmw' => 200131, 'polo' => 175500];{
    print_r($automobili);
}

echo '<hr>';

foreach($automobili as $kljuc => $vrednost) {
    echo 'Moj automobil ' . $kljuc . ' ima ' . $vrednost . ' predjenih kilometara <br>';
}

echo '<hr>';

$kolegij=['Matematika' => 5, 'Fizika' => 3, 'Racunalstvo' => 4, 'Informatika' => 5, 'Robotika' => 5];

foreach($kolegij as $predmet => $ocijena){
    echo 'Predmet ' . $predmet . ' je ocjenjen ' . $ocijena . ' ocjenom <br>';
}









?>
    
</body>
</html>
<?php

$b1 = isset($_GET['broj1']) ? $_GET['broj1'] : 5;
$b2 = isset($_GET['broj2']) ? $_GET['broj2'] : 5;

$red=(int)$b1;
$stupac=(int)$b2;

if($red===0 || $stupac===0){
    echo 'Unesite oba cijela broja';
}

//trazenje zadanih vrednosti putem $_GET-a



$maxred=$red-1;         //maksimalno redova je red na zadnjem mestu (-1)
$maxstupac=$stupac-1;   //maksimalno sutpaca je stupac na zadnjem mestu (-1)
$ispisi=1;              //ispisuje u polje
$minred=0;              //minimalno redova je 0
$minstupac=0;           //minimalno stupaca je 0
$matrica=[];            //prazan array




while($ispisi <= $red * $stupac){



    for($y = $maxstupac; $y >= $minstupac; $y--){   //PRVA FOR PETLJA
        $matrica[$maxred][$y] = $ispisi++;
    }
    $maxred--;

        if($ispisi > $red * $stupac) 
        break;




    for($x = $maxred; $x >= $minred; $x--){         //DRUGA FOR PETLJA
        $matrica[$x][$minstupac] = $ispisi++;
    }
    $minstupac++;

        if($ispisi > $red * $stupac) 
        break;



    for($y = $minstupac; $y <= $maxstupac; $y++){   //TRECA FOR PETLJA
        $matrica[$minred][$y] = $ispisi++;
    }
    $minred++;

        if($ispisi > $red * $stupac) 
        break;



    for($x =$minred; $x <= $maxred; $x++){           //CETVRTA FOR PETLJA - ne treba IF jer je zadnja grana petlje
        $matrica[$x][$maxstupac] = $ispisi++;
    }
    $maxstupac--;

}                                                   //zatvorena while petlja



echo '<table style="text-align:center;">';

for($x=0;$x<$red;){   
    echo '<tr>'; 
    for ($y=0; $y < $stupac;){ 
        echo'<td>' . $matrica[$x][$y] . '</td>';
        $y++;
    }echo '</tr>';
    $x++;
}

echo '</table>';

//drugi deo ciklon skontaj pa teraj dalje

echo '<table>';

for($x=0;$x<$red;){
    echo '<tr>';
    for($y=0;$y<$stupac;){
        echo '<td>' . $matrix[$x][$y] . '</td>';
        $y++;
    }echo '</tr>';
    $x++;
}


echo '</table>';

echo '<hr>';
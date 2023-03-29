<?php
$cijfer1 = rand();
$cijfer2 = rand();

echo $cijfer1, " + ", $cijfer2, " = ", $cijfer1 + $cijfer2, "<br>";
echo $cijfer1, " - ", $cijfer2, " = ", $cijfer1 - $cijfer2, "<br>";
echo $cijfer1, " x ", $cijfer2, " = ", $cijfer1 * $cijfer2, "<br>";
echo $cijfer1, " : ", $cijfer2, " = ", $cijfer1 / $cijfer2, "<br>";

$getallen = [3, 5, 8, 12];

function tafelBerekenen($getal){
    $tafel = "";
    for ($x = 1; $x < 11; $x++){
        $antwoord = $x * $getal;
        $tafel .= "$x x $getal = $antwoord <br>"    ;

    }   
    return $tafel;
}

foreach ($getallen as $cijfer){
    $tafel = tafelBerekenen($cijfer);
    echo $tafel;
    echo "<br>";
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function lijstOptellen($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 == 0){
            $sum += $number;
        }
    }

    return $sum;
}

function langsteWoord($woorden){
    $langstWoord = $woorden[0];

    foreach($woorden as $woord){
        if (strlen($woord) > strlen($langstWoord)){
            $langstWoord = $woord;
        }
    }

    return $langstWoord;
}

function sortLstAsc($numbers){
    $count = count($numbers);   
    $lst = [];

    for($i = 0; $i < $count; $i++){
        $kleinsteGetal = min($numbers);
        array_push($lst, $kleinsteGetal);
        $oudeGetal = array_search($kleinsteGetal, $numbers);
        array_splice($numbers, $oudeGetal, 1);
    }

    return $lst;
}

function GCD($a, $b){
    return ($a % $b) ? gcd($b,$a % $b) : $b;
}

$getallenLijst = [1, 2, 3, 4];
$sortingLst = [4, 5, 9, 2, 1];
$woordenLijst = ['kat', 'hond', 'olifant', 'langstewoord', 'leeuw'];

$result = lijstOptellen($getallenLijst);
$langsteWoordResult = langsteWoord($woordenLijst); 
$sortNumbersResult = sortLstAsc($sortingLst);
$GCD = GCD(15, 25);

echo $result; // Output: 10
echo "<br>";
echo $langsteWoordResult;
echo "<br>";
print_r($sortNumbersResult) ;
echo "<br>";
echo $GCD
?>


</body>
</html>
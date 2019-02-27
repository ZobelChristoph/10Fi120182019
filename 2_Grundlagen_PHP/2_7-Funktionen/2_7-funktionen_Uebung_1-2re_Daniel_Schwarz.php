<?php

echo "------------------<br/>";
echo "Aufgabe 1 <br/>";

$zahl1 = 12;
$zahl2 = 1232;

echo "zahl1: " . $zahl1 . "<br/>";
echo "zahl2: " . $zahl2 . "<br/>";

function add($zahl_1, $zahl_2){
    return $zahl_1 + $zahl_2;
}
echo "Ergebnis: " . add($zahl1, $zahl2);

echo "<br/><br/>------------------<br/>";
echo "Aufgabe 2 <br/>";
$fak_zahl = 4;
function fakultaet($fk){
    $fk_gesamt = 1;
    for($i=2;$i<=$fk;$i++){
        $fk_gesamt = $fk_gesamt * $i;
    };
    return $fk_gesamt;
}
echo fakultaet($fak_zahl);

echo "<br/><br/>------------------<br/>";
echo "Aufgabe 2 rekursiv <br/>";

function fakRe($fk){
    if($fk >1){
        return $fk*fakRe($fk-1);
    }else{
        return 1;
    }
}

echo fakRe(1);

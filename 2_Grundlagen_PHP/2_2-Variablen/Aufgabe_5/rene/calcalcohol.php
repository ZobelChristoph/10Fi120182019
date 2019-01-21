<?php

$gender = $_POST["gender"];
$percent = $_POST["percent"];
$volumedrink = $_POST["volume"];
$mass = $_POST["mass"];
$density = 0.8;

$alcinblood;
$alc;

$factor;

if ($gender == "male") {
    $factor = 0.7;
} elseif ($gender == "female") {
    $factor = 0.6;
} else {
    $factor = 0.8;
}

echo( "Volumen:" . $volumedrink . "ml");
echo( "<br> Prozent:" . $percent . "%");
echo( "<br> Geschlecht:" . $gender );
echo( "<br> Gewicht:" . $mass . " kg");

$alc = $volumedrink * $percent * $density;

$alcinblood = $alc / ($mass * $factor);

echo("<br>");
echo("<br>Alkohol im Blut: " . round ($alcinblood, 0) / 100 . " Promille");
?>
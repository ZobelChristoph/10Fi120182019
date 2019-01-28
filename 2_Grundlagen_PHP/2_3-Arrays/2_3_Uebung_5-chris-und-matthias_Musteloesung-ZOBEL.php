<?php 
$morse = [ "a"=>".-",
    "b"=>"-...", 
    "c"=>"-.-.", 
    "d"=>"-..", 
    "e"=>".", 
    "f"=>"..-.", 
    "g"=>"--.", 
    "h"=>"....", 
    "i"=>"..", 
    "j"=>".---", 
    "k"=>"-.-", 
    "l"=>".-..", 
    "m"=>"--", 
    "n"=>"-.", 
    "o"=>"---", 
    "p"=>".--.", 
    "q"=>"--.-", 
    "r"=>".-.", 
    "s"=>"...", 
    "t"=>"-", 
    "u"=>"..-", 
    "v"=>"...-", 
    "w"=>".--", 
    "x"=>"-..-", 
    "y"=>"-.--", 
    "z"=>"--..", 
    "0"=>"-----",
    "1"=>".----", 
    "2"=>"..---", 
    "3"=>"...--", 
    "4"=>"....-", 
    "5"=>".....", 
    "6"=>"-....", 
    "7"=>"--...", 
    "8"=>"---..", 
    "9"=>"----.",
    "."=>".-.-.-",
    ","=>"--..--",
    "?"=>"..--..",
    "!"=>".-.-.. ",
    "/"=>"-..-.",
    " "=>" "];

/*
foreach($morse as $key => $value)
{
    echo $key . " " . $value . "</br>";
}
*/

$word = "Hat der alte Hexenmeister Sich doch einmal wegbegeben! Und nun sollen seine Geister Auch nach meinem Willen leben. Seine Wort und Werke Merkt ich und den Brauch, und mit Geistesstaerke tu ich Wunder auch. Walle! walle manche Strecke, dass, zum Zwecke, Wasser fliesse,";

$word_lower = strtolower($word); 

/* Aufwendige, unperformante Lösung
for($i=0; $i<strlen($word_lower); $i++)
{
    foreach($morse as $key => $value)
    {
        if($key == $word_lower[$i])
        {
            echo $value . " ";
            break;
        }
    }
}
*/

//Optimierte Lösung

//Konvertiert ein String in ein Array
$wordArray=str_split($word_lower);

//Nutzt den Buchstaben als Key des assoziativen Arrays
foreach($wordArray as $sign)
{
        echo $sign . " : ";
        echo $morse[$sign] . "</br>";
}

?>
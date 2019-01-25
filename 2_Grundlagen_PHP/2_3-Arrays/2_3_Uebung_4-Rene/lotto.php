<?php
$user = [ $_POST["number1"], $_POST["number2"], $_POST["number3"], $_POST["number4"], $_POST["number5"], $_POST["number6"] ];

foreach($user as $numb) {
    echo ($numb . " ");
}

echo("<br>");

$rand = [ rand(1, 49), rand(1, 49), rand(1, 49), rand(1, 49), rand(1, 49), rand(1, 49) ];

foreach($rand as $numb) {
    echo ($numb . " ");
}   
?>
<?php 
$bestfriends = ['Matze' => 'Hess' , 'Flo' => 'Roehrl' , 'Daniel' => 'Baetz'];

foreach($bestfriends as $key => $value)
{
        echo $key . " " . $value . "</br>";
}
echo "</br>";

unset($bestfriends['Matze']);


foreach($bestfriends as $key => $value)
{
    echo $key . " " . $value . "</br>";
}

echo "</br>";

$bestfriends['Viki'] = 'Seubert';
foreach($bestfriends as $key => $value)
{
    echo $key . " " . $value . "</br>";
}

?>
<?php
$aufsteigend = [0,1,2,3,4,5,6,7,8,9];
$absteigend = array_reverse($aufsteigend);
echo "Aufsteigend: ";
foreach($aufsteigend as $element){
    echo $element;
};
echo "<br>";
echo "Absteigend: ";
foreach($absteigend as $element){
    echo $element;
};
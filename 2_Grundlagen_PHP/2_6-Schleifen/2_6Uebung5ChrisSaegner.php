<?php
$c= $_POST["codes"];

for ($i=0; $i<$c; $i++)
    {
        $pa= random_int (0, 9);
        echo $pa;    
        $pb= random_int (0, 9);
        echo $pb;  
        $pc= random_int (0, 9);
        echo $pc;  
        $pd= random_int (0, 9);
        echo $pd;   
        echo "</br>";
    }
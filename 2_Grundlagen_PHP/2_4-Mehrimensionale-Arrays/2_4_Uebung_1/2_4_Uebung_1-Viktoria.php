<?php

    $weihnachtslieder = array(array("Nr.1: ", "Es weihnachtet schwer" , "Simpsons Roasting on an Open Fire" , "6. Dezember 1991"),
                                array("Nr.2: ", "Bart wird ein Genie" , "Bart the Genius" , "20. September 1991"),
                                array("Nr.3: " , "Der Versager" , "Homers Odyssey" , "11. Oktober 1991"),
                                array("Nr.4: ", "Eine ganz normale Familie" , "Theres No Disgrace Like Home" , "13. September 1991"));
            
    for($i=0; $i < count($weihnachtslieder); $i++)
    {
        for($y=0; $y < count($weihnachtslieder[$i]); $y++)
        {
            echo $weihnachtslieder[$i] [$y];
            echo "</br>";
        }
    }
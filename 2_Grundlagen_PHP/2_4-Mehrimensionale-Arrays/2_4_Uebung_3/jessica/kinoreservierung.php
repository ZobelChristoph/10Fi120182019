<?php 
    $reihe = $_POST["reihe"];
    $platznummer = $_POST["platznummer"];

    //True=1=frei
    $number = rand (0,1);
    $kinosaal = array(
        array($number,$number,$number,$number,$number),
        array($number,$number,$number,$number,$number),
        array($number,$number,$number,$number,$number)
    );

    if($kinosaal[$reihe-1][$platznummer-1]==1)
    {
        echo "Platz ist frei";
    }
    else
    {
        echo "Platz ist belegt";
    }

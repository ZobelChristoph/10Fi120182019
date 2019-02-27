<?php

$anschaffungswert = 400;
$abschreibungsdauer = 3;
$abschreibungsbetrag = $anschaffungswert / $abschreibungsdauer;

for ($i = 1; $i <= $abschreibungsdauer; $i++)
{
    echo $i." | ".round($anschaffungswert, 2)."€";

    $anschaffungswert = $anschaffungswert - $abschreibungsbetrag;

    if($anschaffungswert < 0) 
    {
        $anschaffungswert = 0;
    }

    echo " | ".round($abschreibungsbetrag, 2)."€"." | ".round($anschaffungswert, 2)."€"."<br>";
}
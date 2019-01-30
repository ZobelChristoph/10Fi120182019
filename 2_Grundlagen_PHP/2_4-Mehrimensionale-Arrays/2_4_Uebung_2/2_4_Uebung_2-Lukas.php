<?php
$countrys=array("Brasilien" => array("Rang" => "1", "Titel" => "5", "Datum" => "1958, 1962, 1970, 1994, 2002"),
                "Italien" => array("Rang" => "2", "Titel" => "4", "Datum" => "1934, 1938, 1982, 2006"),
                "Deutschland" => array("Rang" => "3", "Titel" => "4", "Datum" => "1954, 1974, 1990, 2006"),
                "Uruguay" => array("Rang" => "4", "Titel" => "2", "Datum" => "1930, 1950"),
                "Argentinien" => array("Rang" => "5", "Titel" => "2", "Datum" => "1978, 1986"),
                "England" => array("Rang" => "6", "Titel" => "1", "Datum" => "1966"),
                "Frankreich" => array("Rang" => "7", "Titel" => "1", "Datum" => "1998"),
                "Spanien" => array("Rang" => "8", "Titel" => "1", "Datum" => "2010"),
                "Korea" => array("Rang" => "Rechner", "Titel" => "sperren", "Datum" => "vergessen")
                );

foreach($countrys as $key => $country) {
    echo $key;
    echo "</br>";
    foreach($country as $key => $value) {
        echo $key . ": " . $value;
        echo "</br>";
    }
};

?>
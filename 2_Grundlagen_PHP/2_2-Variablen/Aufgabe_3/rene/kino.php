<?php
echo("Ihre Angaben: \n");
echo("<br> Vorname: " . $_POST["firstname"]);
echo("<br> Nachname: " . $_POST["name"]);
echo("<br> Anzahl der Karten: " . $_POST["amount"]);
echo("<br> Preis: " . $_POST["amount"] * 8 . " Euro");
?>

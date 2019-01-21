<?php

const EURO = "€";
const MWST =  1.19; //Entspricht 19% MWST

$bezeichnung_tisch="Schreibtisch";
$bezeichnung_stuhl="Buerostuhl";
$bezeichnung_lampe="Lampe";
$bezeichnung_pctisch="Computertisch";

$preis_tisch=1999.00;
$preis_stuhl=589.00;
$preis_lampe=29.00;
$preis_pctisch=999.00;

$preis_tisch_brutto=$preis_tisch*MWST;
$preis_stuhl_brutto=$preis_stuhl*MWST;
$preis_lampe_brutto=$preis_lampe*MWST;
$preis_pctisch_brutto=$preis_pctisch*MWST;

$netto_gesamt=$preis_lampe + $preis_pctisch + $preis_stuhl + $preis_tisch;
$brutto_gesamt=$netto_gesamt * MWST;

echo("Netto-Gesamtpreis der eingekauften Artikel: " . $netto_gesamt . " " . EURO);
echo("<br>Brutto-Gesamtpreis der eingekauften Artikel: " . $brutto_gesamt . " " . EURO);
echo("<br>--------------------------------------------------------");
echo("<br>Der Brutto-Preis vom ". $bezeichnung_tisch . " beträgt: " . $preis_tisch_brutto . " " . EURO);
echo("<br>Der Brutto-Preis vom ". $bezeichnung_stuhl . " beträgt: " . $preis_stuhl_brutto . " " . EURO);
echo("<br>Der Brutto-Preis von der ". $bezeichnung_lampe . " beträgt: " . $preis_lampe_brutto . " " . EURO);
echo("<br>Der Brutto-Preis vom ". $bezeichnung_pctisch . " beträgt: " . $preis_pctisch_brutto . " " . EURO);

?>
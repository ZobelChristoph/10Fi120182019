<?php
/**
 * Created by PhpStorm.
 * User: w.polnik
 * Date: 07.12.2018
 * Time: 11:42
 */

    $bezeichnung_tisch = "Schreibtisch";
    $bezeichnung_stuhl = "Bürostuhl";
    $bezeichnung_lampe = "Lampe";
    $bezeichnung_pctisch = "Computertisch";

    $preis_tisch = 1999.00;
    $preis_stuhl = 589.00;
    $preis_lampe = 29.00;
    $preis_pctisch = 999.00;


    define("eurozeichen", " € ");
    define("mwst", 1.19);

    $netto_gesamt = $preis_tisch + $preis_stuhl + $preis_lampe + $preis_pctisch;
    $brutto_gesamt =  $netto_gesamt * mwst;

    $preis_tisch_brutto = $preis_tisch * mwst;
    $preis_stuhl_brutto = $preis_stuhl * mwst;
    $preis_lampe_brutto = $preis_lampe * mwst;
    $preis_pctisch_brutto = $preis_pctisch * mwst;


    echo "a:) Gesamtpreis netto = " . $netto_gesamt . eurozeichen;
    echo "</br>";
    echo "b:) Gesamtpreis brutto = " . $brutto_gesamt . eurozeichen;
    echo "</br>";
    echo "c:) Brutto der einzelnen Produkte:";
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_tisch . '</b>' .  " = " . $preis_tisch_brutto . eurozeichen;
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_stuhl . '</b>' .   " = " . $preis_stuhl_brutto . eurozeichen;
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_lampe . '</b>' .   " = " . $preis_lampe_brutto . eurozeichen;
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_pctisch . '</b>' .   " = " . $preis_pctisch_brutto . eurozeichen;
    echo "</br>";

    echo "</br>";
    echo "d:)";
    echo "</br>";
    echo "Netto-Gesamtpreis der eingekauften Produkte = " . $netto_gesamt;
    echo "</br>";
    echo "Brutto-Gesamtpreis der eingekauften Produkte = " . $brutto_gesamt;
    echo "</br>";
    echo "-------------------------------------------------------------------------------------------------";
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_tisch . '</b>' .  " = " . $preis_tisch_brutto . eurozeichen;
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_stuhl . '</b>' .   " = " . $preis_stuhl_brutto . eurozeichen;
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_lampe . '</b>' .   " = " . $preis_lampe_brutto . eurozeichen;
    echo "</br>";
    echo  "Brutto-Preis " . '<b>' . $bezeichnung_pctisch . '</b>' .   " = " . $preis_pctisch_brutto . eurozeichen;
    echo "</br>";
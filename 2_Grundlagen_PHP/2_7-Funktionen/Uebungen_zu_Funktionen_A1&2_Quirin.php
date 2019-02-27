<?php
	//Aufgabe 1:
	echo "Aufgabe 1:<br/><br/>";
	//Funktion - bekommt 2 Zahlen - Gibt Summe zurück. Summe nach Funktion ausgeben.
	
	//Implementierung der Funktion:
	function addieren(int $a, int $b) : int{
		return ($a + $b);
	}
	
	//Initialisierung der 2 Zahlen für die Funktion:
	$Zahl1 = 10;
	$Zahl2 = 11;
	
	//Ausgabe:
	echo "Ergebnis: " . addieren($Zahl1, $Zahl2);
	
	echo "<br/><br/>";
	
	//Aufgabe2:
	echo "Aufgabe2:<br/><br/>";
	
	//Funktion, welche die Fakultät einer natürlichen Zahl zurückgibt:
	
	function faculty(int $number){
		if ($number > 1){
			$result = $number * faculty($number - 1);
			return $result;
		}
		else{
			return 1;
		}
	}
	
	$get_faculty_of = 5;
	echo "Fakultät von " . $get_faculty_of . ": " . faculty($get_faculty_of);
	
	echo "<br/><br/>";
?>
<?php
	//Aufgabe 2:
	
	echo "Aufgabe 2:<br/>";
	
	//Sie wollen herausfinden, wie viele Kilometer Sie im Durchschnitt mit einer Tankfüllung fahren können.
	//Hierzu haben Sie sich folgende Werte notiert: (1020km, 923km, 780km, 890km).
	
	//Aufgabe a) Berechnen Sie die durchschnittliche Kilometerreichweite für Ihr Fahrzeug.
	echo "a)<br/>";
	
		$km = array();
		$km = [1020, 923, 780, 890];
		
		$q = (array_sum($km) / count($km));
		echo "Durchschnittliche Kilometerreichweite: " . $q . " pro Tankfüllung";
		
	echo "<br/>";
	
	//Aufgabe b) Ermitteln Sie den durchschnittlichen Kraftstoffverbrauch je 100km unter der Annahme,
	//dass Sie einen 70 Liter Tank haben.
	//durchschnittlicher verbrauch: 70liter auf q kilometer;
	
	echo "b) <br/>";
	$q1km = (70 / $q);
	$q100km = round(($q1km * 100), 2);
	echo "Durchschnittlicher Verbrauch auf 100km: " . $q100km . " Liter";
?>
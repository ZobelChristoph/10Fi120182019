<?php

    // Contents einrücken
    echo "<div style=\"padding: 44px;\">";

    // Ausgabe Überschrift
    echo "<h2>XML DEMO</h2>";

    // Funktion zur Ausgabe der Bücherdaten

    function books_output($library_array) {
        foreach ($library_array as $index => $book) {
            echo "Book " . $index . ":<br/>";
            foreach ($book as $key => $value) {
                echo $key . ": " . $value . "<br/>";
            }
            echo "<br/>";
        }
        echo "<br/>";
    }

    // Erfassen der Bücherdaten
    $library = array(
        [
            'title' => 'To Kill A Mockingbird',
            'author' => 'Harper Lee',
            'available' => true,
            'pages' => 336,
            'isbn' => 9780061120084
        ],
        [
            'title' => '1984',
            'author' => 'George Orwell',
            'available' => true,
            'pages' => 267,
            'isbn' => 9780547249643
        ],
        [
            'title' => 'One Hundred Years Of Solitude',
            'author' => 'Gabriel Garcia Marquez',
            'available' => false,
            'pages' => 457,
            'isbn' => 9785267006323
        ]
    );

    // Ausgabe der Bücherdaten:
    books_output($library);

    // Instanziierung eines SimpleXMLElement-Objects:
    $xml_root = new SimpleXMLElement('<root/>');  // <root>-Node hinzufügen

    // Zuweisung der Bücherdaten
    foreach ($library as $index => $book) {
        $xml_book = $xml_root->addChild('book');  // <book>-Node zu root-node hinzufügen, Rückgabe-Objekt "SimpleXMLElement" der Variable $xml_book zuweisen
        foreach ($book as $key => $value) {
            $xml_book->$key = $value;  // Bücher-Daten mit Node: "<$key>", Value: "$value" in SimpleXMLElement '$xml_book' speichern
        }
    }

    // SimpleXMLElement-Object als Datei speichern
    $xml_root->asXml('books.xml');

    // SimpleXMLElement-Object aus Datei lesen
    $read_xml = simplexml_load_file("books.xml");  // $read_xml type: SimpleXMLElement

    // Saubere Ausgabe des SimpleXMLElement-Objects
    echo "<br/>File as SimpleXMLElement:<br/>";
    echo "<pre>";
    ob_start();
    var_dump($read_xml);
    $a = ob_get_contents();
    ob_end_clean();
    echo htmlspecialchars($a, ENT_QUOTES);
    echo "</pre>";

    // Auslesen der in der Datei gespeicherten Daten:
    $read_library = array();

    foreach ($read_xml->book as $books) {
        $read_information = array();
        foreach ($books->children() as $key => $value) {
            $read_information[$key] = $value;
        }
        array_push($read_library, $read_information);
    }

    // Ausgabe des aus der Datei ausgelesenen Bücherdaten:
    books_output($read_library);

    // END_OF Contents einrücken
    echo "</div>";
?>

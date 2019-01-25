<?php 
$morse = [ "a"=>".-",
    "b"=>"-...", 
    "c"=>"-.-.", 
    "d"=>"-..", 
    "e"=>".", 
    "f"=>"..-.", 
    "g"=>"--.", 
    "h"=>"....", 
    "i"=>"..", 
    "j"=>".---", 
    "k"=>"-.-", 
    "l"=>".-..", 
    "m"=>"--", 
    "n"=>"-.", 
    "o"=>"---", 
    "p"=>".--.", 
    "q"=>"--.-", 
    "r"=>".-.", 
    "s"=>"...", 
    "t"=>"-", 
    "u"=>"..-", 
    "v"=>"...-", 
    "w"=>".--", 
    "x"=>"-..-", 
    "y"=>"-.--", 
    "z"=>"--..", 
    "0"=>"-----",
    "1"=>".----", 
    "2"=>"..---", 
    "3"=>"...--", 
    "4"=>"....-", 
    "5"=>".....", 
    "6"=>"-....", 
    "7"=>"--...", 
    "8"=>"---..", 
    "9"=>"----.",
    "."=>".-.-.-",
    ","=>"--..--",
    "?"=>"..--..",
    "/"=>"-..-.",
    " "=>" "];

       foreach($morse as $key => $value)
       {
        echo $key . " " . $value . "</br>";
       }
  ?>

<?php  

$word = "Hat der alte Hexenmeister
Sich doch einmal wegbegeben!
Und nun sollen seine Geister
Auch nach meinem Willen leben.
Seine Wort und Werke
Merkt ich und den Brauch,
Und mit Geistesstärke
Tu ich Wunder auch.
Walle! walle
Manche Strecke,
Daß, zum Zwecke,
Wasser fließe,
Und mit reichem, vollem Schwalle
Zu dem Bade sich ergieße.
Und nun komm, du alter Besen!
Nimm die schlechten Lumpenhüllen!
Bist schon lange Knecht gewesen;
Nun erfülle meinen Willen!
Auf zwei Beinen stehe,
Oben sei ein Kopf!
Eile nun und gehe
Mit dem Wassertopf!
Walle! walle
Manche Strecke,
Daß, zum Zwecke,
Wasser fließe
Und mit reichem, vollem Schwalle
Zu dem Bade sich ergieße.
Seht, er läuft zum Ufer nieder;
Wahrlich! ist schon an dem Flusse,
Und mit Blitzesschnelle wieder
Ist er hier mit raschem Gusse.
Schon zum zweiten Male!
Wie das Becken schwillt!
Wie sich jede Schale
Voll mit Wasser füllt!
Stehe! stehe!
Denn wir haben
Deiner Gaben
Vollgemessen! -
Ach, ich merk es! Wehe! wehe!
Hab ich doch das Wort vergessen! 
Ach, das Wort, worauf am Ende
Er das wird, was er gewesen.
Ach, er läuft und bringt behende!
Wärst du doch der alte Besen!
Immer neue Güsse
Bringt er schnell herein,
Ach! und hundert Flüsse
Stürzen auf mich ein.
Nein, nicht länger
Kann ich's lassen;
Will ihn fassen.
Das ist Tücke!
Ach! nun wird mir immer bänger!
Welche Miene! welche Blicke!
O du Ausgeburt der Hölle!
Soll das ganze Haus ersaufen?
Seh ich über jede Schwelle
Doch schon Wasserströme laufen.
Ein verruchter Besen,
Der nicht hören will!
Stock, der du gewesen,
Steh doch wieder still!
Willst's am Ende
Gar nicht lassen?
Will dich fassen,
Will dich halten
Und das alte Holz behende
Mit dem scharfen Beile spalten. 
Seht, da kommt er schleppend wieder!
Wie ich mich nur auf dich werfe,
Gleich, o Kobold, liegst du nieder;
Krachend trifft die glatte Schärfe.
Wahrlich! brav getroffen!
Seht, er ist entzwei!
Und nun kann ich hoffen,
Und ich atme frei!
Wehe! wehe!
Beide Teile
Stehn in Eile
Schon als Knechte
Völlig fertig in die Höhe!
Helft mir, ach! ihr hohen Mächte!
Und sie laufen! Naß und nässer
Wird's im Saal und auf den Stufen.
Welch entsetzliches Gewässer!
Herr und Meister! hör mich rufen! -
Ach, da kommt der Meister!
Herr, die Not ist groß!
Die ich rief, die Geister,
Werd ich nun nicht los.
In die Ecke,
Besen! Besen!
Seid's gewesen.
Denn als Geister
Ruft euch nur, zu seinem Zwecke
Erst hervor der alte Meister.";

$word_lower = strtolower($word); 

    for($i=0; $i<strlen($word_lower); $i++)
    {
        foreach($morse as $key => $value)
        {
            if($key == $word_lower[$i])
            {
                echo $value . " ";
                break;
            }
        }
    }
  ?>  
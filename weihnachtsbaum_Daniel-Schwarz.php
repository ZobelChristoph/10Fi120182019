<?php

echo"<h1>Frohe Weihnachten</h1>";
echo "<br>statischer Code<br><br>";

echo "
<p>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp***<br>
&nbsp&nbsp&nbsp&nbsp*****<br>
&nbsp&nbsp*******<br>
*********<br>
&nbsp&nbsp&nbsp&nbsp&nbsp***<br>
&nbsp&nbsp&nbsp&nbsp&nbsp***
</p><br>";

echo "
<p>
*****<br>
&nbsp&nbsp***<br>
&nbsp&nbsp&nbsp&nbsp*<br>
&nbsp&nbsp***<br>
*****
</P>";

echo "
<p>
**********<br>
&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<br>
&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp*<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp**
</p>
";

echo "<br>Der Versuche die oben abgebildeten Formen dynamisch zu erzeugen:<br>";

//Dieser Code ist nicht selber geschrieben.
//Ich wollte mir anhand dessen Schleifen in PHP anschauen
$tiefe = 20;
for($i=0;$i<$tiefe;$i++){
        for($j=0;$j<floor(($tiefe-$i));$j++)
                echo "&nbsp&nbsp;";
        for($j=0;$j<(2*$i)-1;$j++)
                echo "#";

        echo "<br />";
}
?>
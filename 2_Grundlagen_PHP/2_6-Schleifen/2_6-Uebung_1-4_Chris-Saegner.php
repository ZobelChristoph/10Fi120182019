<?php 

for($i = 1; $i <= 1000; $i++)
{
  echo $i . "</br>";
}

for($i = 1000; $i >=0; $i=$i-100)
{
    echo $i . "</br>";
}

$x= 1324;
while ($x > 0.001)
{
    $x=$x/2;
    echo $x . "</br>";
}



$one_to_ten =[1,2,3,4,5,6,7,8,9,10];
for ($i=0; $i< 10; $i++)
{
    for ($j=0; $j< 10; $j++)
    {
        $output= $one_to_ten[$i] * $one_to_ten[$j];
        if ($output < 10)
        {
            echo "&nbsp";
        }
        if ($output < 10)
        {
            echo "&nbsp";
        }
        echo $output;
        echo " | ";
    }
    echo "</br>";
}
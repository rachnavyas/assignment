<?php
echo"<h3>Leap year between year 1901 to 2016</h3><br>";
for($y=1901;$y<=2016;$y++)
{
   $rem=$y%4;
    if($rem==0)
    {
        echo $y ."<br>";
    }
}
?>
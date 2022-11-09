<?php
$n=0;
$num1=0;
$num2=1;
while($n<10)
{
    echo' '.$num1;
    $num3=$num2+$num1;
    $num1=$num2;
    $num2=$num3;
    $n=$n+1;
}
?>
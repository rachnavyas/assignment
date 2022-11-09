<?php
$a = 100;
$b = 90;
$c = 120;
$ans = $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);
echo $ans;
?>
<?php
$a = '1'; 
$b = &$a; 
$b = "2$b";
echo $a."<br>";
echo $b."<br>";


//It passes a reference to the variable
 //so when any variable assigned the reference is edited, 
 //the original variable is changed.
 //first assign $a=1;after that $b assign reference to $a
 //so the value of $b sets a value of $a
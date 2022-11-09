<?php
echo"<pre>";
//numeric Array
$arr=array("Apple","Orange","Kiwi");
print_r($arr);
//associative array
$a=array("a"=>"php","b"=>"java","c"=>"asp");
print_r($a);
//multidimentional array
$b=array(1,2,3,array("red","yellow","green"),array("a"=>"banana","b"=>"mango","c"=>"orange"));
print_r($b[3][2]);
echo"<br>";
//convert json to array
$json = '{"UK": "London", "ES": "Madrid", "IT": "Rome"}';

print_r (json_decode($json));
?>
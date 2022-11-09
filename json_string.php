<?php
$json = '{"john": 65, "peter": "95", "mary": "85"}';
echo"<pre>";
$arr=json_decode($json,true);
//var_dump(json_decode($json));
echo "john ".$arr["john"]."<br>";
echo "peter ".$arr["peter"]."<br>";
echo "mary ".$arr["mary"]."<br>";
?>
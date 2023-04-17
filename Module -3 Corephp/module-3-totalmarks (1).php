<?php
$ph = 70;
$ch = 50;
$bi = 80;
$math = 90;
$comp = 90;
echo "Physics=" . $ph . "<br>";
echo "Chemistry=" . $ch . "<br>";
echo "Biology=" . $bi . "<br>";
echo "Mathematics=" . $math . "<br>";
echo "Computer=" . $comp . "<br><br><br>";
$total = $ph + $ch + $bi + $math + $comp;
echo "Total marks = " . $total . "<br>";
$per = ($total / 5);
echo "Percentage =" . $per . "<br>";
if ($per >= 90) {
    $grade = "A";

} elseif ($per >= 80 && $per < 90) {
    $grade = "B";
} elseif ($per >= 70 && $per < 80) {
    $grade = "C";
} elseif ($per >= 60 && $per < 70) {
    $grade = "D";
} else {
    $grade = "E";
}
echo "Grade = '" . $grade . "'";
?>
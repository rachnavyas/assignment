<?php
$num = 5;
$j = 2;
for ($i = 1; $i <= 4; $i++) {
  for ($a = 1; $a <= 3; $a++) {
    if ($a == 1 and $i == 1) {
      $sum = $num + 4;
      echo $num . $sum;
      $sum = 0;
      break;
    } else {
      $num = $j;
      $sum = $num + 4;
      echo $num . $sum . ($sum + 4);
      $j = $j + 1;
      break;
    }
  }
  echo "<br>";
}
?>
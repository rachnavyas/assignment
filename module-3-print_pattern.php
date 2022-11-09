<?php
for ($i = 1; $i <= 5; $i++) {
    for ($a = 1; $a <= 5; $a++) {
        if ($i == 1 or $i == 5 or $a == 1) {
            echo '*';
        } else {
            echo " ";
        }
    }
    echo "<br>";
}
?>
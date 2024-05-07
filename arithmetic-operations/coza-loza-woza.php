<?php
$upperlimit = 110;

$i = 1;
$div3 = $i % 3 === 0;
$div5 = $i % 5 === 0;
$div7 = $i % 7 === 0;

for (; $i < $upperlimit + 1; $i++) {

    if ($div3 + $div5 + $div7 >= 2) {
        echo "CozaLoza ";
    } elseif ($i % 3 === 0) {
        echo "Coza ";
    } elseif ($i % 5 === 0) {
        echo "Loza ";
    } elseif ($i % 7 === 0) {
        echo "Woza ";
    } else {
        echo "$i ";
    }
    if ($i % 11 === 0) {
        echo "\n";
    }
}
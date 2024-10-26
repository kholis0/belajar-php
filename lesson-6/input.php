<?php
// fungsi perkalian
echo "fungsi perkalian\n";
echo "masukkan angka pertama : ";
$a = trim(fgets(STDIN));
echo "masukkan angka kedua : ";
$b = trim(fgets(STDIN));
if (is_int($a) && is_int($b)) {
    echo "$a x $b = " . $a * $b;
} else {
    echo "mohon maaf, anda hanya di perbolehkan memasukkan angka";
}

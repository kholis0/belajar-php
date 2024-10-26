<?php
function perkalian($angka)
{
    for ($i = 1; $i <= 10; $i++) {
        echo "$angka x $i = " . $angka * $i . PHP_EOL;
    }
}

// memanggil fungsi perkalian dengan perulangan
for ($x = 1; $x <= 10; $x++) {
    perkalian($x);
}
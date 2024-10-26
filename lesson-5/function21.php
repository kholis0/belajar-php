<?php
// arrow function #3
$harga = 15000;
$diskon = 10;

$hargaAkhir = fn() => $harga - ($harga * ($diskon / 100));

echo $hargaAkhir();

<?php
// variable function #2
// $format = strtoupper / atau sebuah function
function halo(string $nama, $format)
{
    $namaAkhir = $format($nama);
    echo "halo $namaAkhir" . PHP_EOL;
}

halo("Santo", "strtoupper");
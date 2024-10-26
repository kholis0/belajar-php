<?php
// callback function
function halo(string $nama, callable $format)
{
    $namaAkhir = call_user_func($format, $nama);
    echo "halo $namaAkhir" . PHP_EOL;
}

halo("Dono", function($nama) {return strtoupper($nama);});
halo("doni", fn($nama)=>strtoupper($nama));
halo("Paijo", "strtoupper");
<?php
// estafet function return value
function absen(...$nama)
{
    return $nama;
}

$presensi = absen("paijo", "furqon", "ahmad");

foreach ($presensi as $pre) {
    echo ucwords($pre) . PHP_EOL;
}

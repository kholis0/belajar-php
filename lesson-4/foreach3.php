<?php
// foreach dengan array asosiatif
$alamat = [
    "desa" => "kenangan",
    "kecamatan" => "suka damai",
    "kabupaten" => "madiun"
];


// ucwords untuk mengubah menjadi huruf kapital di awal kata
foreach ($alamat as $index => $nilai) {
    echo ucwords($index) . " : " . ucwords($nilai) . PHP_EOL;
}
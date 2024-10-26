<?php
// foreach dengan array multidimensi
$mahasiswa = [
    [
        "nim" => "87258596729835",
        "nama" => "Paijo Wahyono",
        "prodi" => "TRPL"
    ],
    [
        "nim" => "0934027593582",
        "nama" => "Ahmad Fauzi",
        "prodi" => "TKJ"
    ],
    [
        "nim" => "090378597298579",
        "nama" => "Dita Leni Karet",
        "prodi" => "Tata Boga"
    ]
];

foreach ($mahasiswa as $mhs) {
    foreach ($mhs as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
    echo PHP_EOL;
}

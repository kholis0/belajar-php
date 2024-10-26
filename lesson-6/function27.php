<?php
// string function
$nama = ["DIta", "Leni", "Karet"];
var_dump(join($nama));

// explode untuk memecah
$buah = "kelapa jagung mangga";
var_dump(explode(" ", $buah));

$status = "hrd";
var_dump(strtoupper($status));

$quotes = "WAKTU ADALAH EMAS";
var_dump(strtolower($quotes));

// substr untuk mengambil
$teks = "lorem ipsum dolor sit amet";
var_dump(substr($teks, 0, 5));

// trim untuk menghapus
$random = "  hemat pangkal kaya ";
var_dump(trim($random));
<?php
// array 2
$a = [
    "nama_depan" => "Paijo",
    "nama_belakang" => "Wahyono"
];
$b = [
    "nama_belakang" => "Wahyono",
    "nama_depan" => "Paijo"
];

var_dump($a == $b);
var_dump($a === $b);
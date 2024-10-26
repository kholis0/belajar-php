<?php
// anonymous function #3
$namaDepan = "Ahmad";
$namaBelakang = "Fawzi";

$hai = function() use($namaDepan, $namaBelakang)
{
    echo "Hai $namaDepan $namaBelakang\n";
};

$hai();
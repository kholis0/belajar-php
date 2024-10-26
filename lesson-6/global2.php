<?php
$angka = 1;

function tambahSatu()
{
    global $angka;
    $angka++;
}

tambahSatu();
echo $angka . PHP_EOL;

tambahSatu();
echo $angka . PHP_EOL;

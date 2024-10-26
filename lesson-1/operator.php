<?php
// operator aritmatika
$x = 20;
$y = 5;

$tambah = $x + $y;
echo "$x + $y = $tambah" . PHP_EOL;

$kurang = $x - $y;
echo "$x - $y = $kurang" . PHP_EOL;

$kali = $x * $y;
echo "$x * $y = $kali" . PHP_EOL;

$bagi = $x / $y;
echo "$x / $y = $bagi" . PHP_EOL;

$modulus = $x % $y;
echo "$x % $y = $modulus" . PHP_EOL;

$pangkat = $x ** $y;
echo "$x ** $y = $pangkat" . PHP_EOL;

// operator penugasan
$a = 10;
$b = 2;

echo $a + $b . PHP_EOL;

echo $a - $b . PHP_EOL;

echo $a / $b . PHP_EOL;

echo $a * $b . PHP_EOL;


// operator increment & decrement
$c = 12;
$d = 6;
echo ++$c . PHP_EOL;
echo --$c . PHP_EOL;

// operator perbandingan
$e = 15;
$f = 5;

var_dump($e > $f);
var_dump($e < $f);
var_dump($e == $f);
var_dump($e != $f);
var_dump(1=="1");  // Type data jugling 
var_dump(1==="1"); // Menentukan data sampai tipe datanya
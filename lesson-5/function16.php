<?php
// contoh kasus anonymous function
$diskon10persen = function (int $harga) {
    $hargaDiskon = $harga * (10/100);
    $hargaAkhir = $harga - $hargaDiskon;
    echo "Selamat Anda mendapatkan diskon 10%\n";
    echo "harga barang $harga\n";
    echo "anda cukup membayar $hargaAkhir\n";
};

$diskon10persen(15000);
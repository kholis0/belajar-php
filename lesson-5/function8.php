<?php
// variable-length argument list
function jumlah(...$angka)
{
    $total = 0;
    foreach ($angka as $a) {
        $total += $a;
    }
    echo "Total " . implode(" + ", $angka) . " = $total" . PHP_EOL;
    // implode untuk memecah
}

jumlah(1,2,2,5);
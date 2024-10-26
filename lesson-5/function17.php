<?php
// anonymous function #2
function siyu(string $nama, $format)
{
    $namaAkhir = $format($nama);
    echo "halo $namaAkhir\n";
}

siyu("Rizal Ahmad", function (string $m) {
    return strtoupper($m);
});
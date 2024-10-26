<?php
// recursive function
function faktor(int $angka)
{
    $total = 1;
    for ($i = 1; $i <= $angka; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(faktor(6));

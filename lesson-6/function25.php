<?php
// recursive funtion simple
function tampil($angka)
{
    if ($angka <= 10) {
        echo "Angka ke - $angka\n";
        tampil($angka + 1);
    }
}

tampil(1);

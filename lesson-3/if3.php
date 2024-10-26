<?php
// if bersarang
$umur = 18;
$statusBayar = false;

if ($umur >= 17) {
    if ($statusBayar == true) {
        echo "selamat....., KTP anda sudah jadi";
    } else {
        echo "silahkan membayar biaya admin terlebih dahulu";
    }
} else {
    echo "Maaf, anda belum cukup umur";
}

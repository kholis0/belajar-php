<?php
// function return
function tambah(int $a, int $b)
{
    return $a + $b;
}

tambah(10, 5);
echo tambah(10, 5);

// function yang gagal karena panggil 2 kali
// function gagal(int $c, int $d){
//     return $c;
//     return $d;
// }

// var_dump(gagal(1,2));
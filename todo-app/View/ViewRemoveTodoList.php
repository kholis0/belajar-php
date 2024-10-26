<?php

/**
 * view menghapus todolist
 */

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "menghapus todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        if (removeTodoList($pilihan) == true) {
            echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}

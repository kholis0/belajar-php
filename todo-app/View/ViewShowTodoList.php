<?php

/**
 * 
 * menampilan todolist
 */

require_once __DIR__ . "/../BussinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "Menu : 1. Tambah | 2. Hapus | x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewAddTodoList();
        } elseif ($pilihan == "2") {
            viewRemoveTodoList();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Maaf, pilihan tidak di mengerti" . PHP_EOL;
        }
    }
    echo "sampai jumpa";
}

<?php

/**
 * Menghapus todolist
 */

function removeTodoList(int $number): bool
{
    global $todoList;

    // mengecek nilai yang di input
    if ($number > sizeof($todoList) or $number <= 0) {
        return false;
    }

    // menggeser isi array
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // menggeser array indeks terakhir
    unset($todoList[sizeof($todoList)]);
    return true;
}

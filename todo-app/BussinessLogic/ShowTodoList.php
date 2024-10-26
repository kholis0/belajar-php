<?php

/**
 * Menampilkan TodoList
 */

function showTodoList()
{
    global $todoList;

    echo "Todo List" . PHP_EOL;
    echo "==============" . PHP_EOL;
    foreach ($todoList as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }
    echo "================" . PHP_EOL;
}

<?php

/**
 * 
 * view menambah todolist
 */
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BussinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewAddTodoList()
{
    echo "Tambah Todo List" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todo";
    } else {
        addTodoList($todo);
    }
}

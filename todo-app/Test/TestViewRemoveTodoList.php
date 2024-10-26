<?php

/**
 * test file View/ViewRemoveTodoList.php
 */

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");
addTodoList("Belajar PHP");
addTodoList("Belajar MySQL");

showTodoList();

viewRemoveTodoList();

showTodoList();

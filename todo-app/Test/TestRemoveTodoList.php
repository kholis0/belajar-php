<?php
/**
 * 
 * test file bussinessLogic/RemoveTodoList.php
 */
require_once "../Model/TodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/RemoveTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");
addTodoList("Belajar PHP");
addTodoList("Belajar MySql");

showTodoList();

removeTodoList(0);

showTodoList();
<?php

/**
 * 
 * test file BussinessLogic/AddTodoList.php
 */

require_once "../Model/TodoList.php";
require_once "../BussinessLogic/AddTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";

showTodoList();
addTodoList("Belajar HTML");
addTodoList("Belajar CSS");
addTodoList("Belajar PHP");
showTodoList();

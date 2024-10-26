<?php

/**
 * test file View/ViewAddTodoList.php
 */

require_once "../View/ViewAddTodoList.php";
require_once "../BussinessLogic/ShowTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";

addTodoList("Membaca");
addTodoList("Menulis");

viewAddTodoList();

showTodoList();

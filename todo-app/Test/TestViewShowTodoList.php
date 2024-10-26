<?php

/**
 * 
 * test file View/ViewShowTodoList.php
 */

require_once "../View/ViewShowTodoList.php";
require_once "../BussinessLogic/AddTodoList.php";

addTodoList("Belajar HTML");
addTodoList("Belajar CSS");

viewShowTodoList();

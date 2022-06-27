<?php

require_once "/DEV/PHP/PHPVsc/Aplikasi-Todolist/Model/TodoList.php";
require_once "/DEV/PHP/PHPVsc/Aplikasi-Todolist/BusinessLogic/AddTodoList.php";


addTodoList("Kerja");
addTodoList("Nugas");
addTodoList("Kerja Lagi");

var_dump($todoList);

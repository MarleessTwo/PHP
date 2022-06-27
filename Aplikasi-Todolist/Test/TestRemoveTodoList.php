<?php

require_once "/DEV/PHP/PHPVsc/Aplikasi-Todolist/Model/TodoList.php";
require_once "/DEV/PHP/PHPVsc/Aplikasi-Todolist/BusinessLogic/AddTodoList.php";
require_once "/DEV/PHP/PHPVsc/Aplikasi-Todolist/BusinessLogic/ShowTodoList.php";
require_once "/DEV/PHP/PHPVsc/Aplikasi-Todolist/BusinessLogic/RemoveTodoList.php";


addTodoList("1.Belanja");
addTodoList("2.Belanja");
addTodoList("3.Belanja");
addTodoList("5.Belanja");
addTodoList("6.Belanja");

showTodoList();

$success = removeTodoList(1);
var_dump($success);

showTodoList();

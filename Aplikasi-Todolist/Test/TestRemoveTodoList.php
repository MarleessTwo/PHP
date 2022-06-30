<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";


addTodoList("1.Belanja");
addTodoList("2.Belanja");
addTodoList("3.Belanja");
addTodoList("5.Belanja");
addTodoList("6.Belanja");

showTodoList();

$success = removeTodoList(1);
var_dump($success);

showTodoList();

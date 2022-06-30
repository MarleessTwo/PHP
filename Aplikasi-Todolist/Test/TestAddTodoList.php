<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";


addTodoList("Kerja");
addTodoList("Nugas");
addTodoList("Kerja Lagi");

var_dump($todoList);

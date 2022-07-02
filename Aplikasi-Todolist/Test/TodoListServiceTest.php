<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

// function testShowTodoList(): void
// {

//   $todoListRepository = new TodoListRepositoryImpl();
//   $todoListRepository->todoList[1] = new TodoList("abc");
//   $todoListRepository->todoList[2] = new TodoList("abd");
//   $todoListRepository->todoList[3] = new TodoList("abq");
//   $todoListService = new TodoListServiceImpl($todoListRepository);

//   $todoListService->showTodoList();
// }

// testShowTodoList();

function testAddTodoList(): void
{

  $todoListRepository = new TodoListRepositoryImpl();

  $todoListService = new TodoListServiceImpl($todoListRepository);
  $todoListService->addTodoList("1Abcd");
  $todoListService->addTodoList("2Abcde");
  $todoListService->addTodoList("3Abcdef");

  $todoListService->showTodoList();
  $todoListService->removeTodoList(5);
  $todoListService->showTodoList();
}

testAddTodoList();

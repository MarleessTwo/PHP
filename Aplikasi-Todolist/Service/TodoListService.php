<?php


namespace Service {

  use Entity\TodoList;
  use Repository\TodoListRepository;

  interface TodoListService
  {
    function showTodoList(): void;
    function addTodoList(string $todo): void;
    function removeTodoList(int $number): void;
  }

  class TodoListServiceImpl implements TodoListService
  {
    private TodoListRepository $todoListRepository;



    // Function #################################

    // Constructor
    public function __construct(TodoListRepository $todoListRepository)
    {
      $this->todoListRepository = $todoListRepository;
    }

    // Show Todo List
    function showTodoList(): void
    {
      echo "TODOLIST" . PHP_EOL;

      $todoList = $this->todoListRepository->findAll();

      foreach ($todoList as $number => $value) {
        echo "{$number}. " . $value->getTodo() . PHP_EOL;
      }
    }

    // Add Todo List
    function addTodoList(string $todo): void
    {
      $todoList = new TodoList($todo);
      $this->todoListRepository->save($todoList);
      echo "Data Berhasil Disimpan.." . PHP_EOL;
    }

    // Remove Todo List
    function removeTodoList(int $number): void
    {
      if ($this->todoListRepository->remove($number)) {
        echo "SUKSES MENGHAPUS" . PHP_EOL;
      } else {
        echo "PENGHAPUSAN GAGAL" . PHP_EOL;
      }
    }
  }
}

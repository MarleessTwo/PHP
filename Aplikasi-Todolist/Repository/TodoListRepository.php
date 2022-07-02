<?php



namespace Repository {

  use Entity\TodoList;

  // TodoListRepository
  interface TodoListRepository
  {
    function save(TodoList $todoList): void;
    function remove(int $number): bool;
    function findAll(): array;
  }


  // Implementasi TodoListRepository
  class TodoListRepositoryImpl implements TodoListRepository
  {

    var array $todoList = array();


    // Function Konkrit #######################

    // SAVE
    function save(TodoList $todoList): void
    {
      $number = sizeof($this->todoList) + 1;

      $this->todoList[$number] = $todoList;
    }


    // REMOVE
    function remove(int $number): bool
    {
      if ($number > sizeof($this->todoList)) {
        return false;
      }

      for ($i = $number; $i < sizeof($this->todoList); $i++) {
        $this->todoList[$i] = $this->todoList[$i + 1]; // 0 + 1 = 1;
      }

      unset($this->todoList[sizeof($this->todoList)]);

      return true;
    }


    // FINDALL
    function findAll(): array
    {
      return $this->todoList;
    }
  }
}

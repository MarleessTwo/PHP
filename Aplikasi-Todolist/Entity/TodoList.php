<?php



namespace Entity {

  class TodoList
  {
    private $todo;


    // Functon Konkrit #############################

    // Constructor
    public function __construct(string $todo = "")
    {

      $this->todo = $todo;
    }

    // Get Todo
    public function getTodo(): string
    {
      return $this->todo;
    }

    // Set Todo
    public function setTodo(string $todo = ""): void
    {
      $this->todo = $todo;
    }
  }
}

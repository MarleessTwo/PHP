<?php



namespace Repository {

  use Entity\Blog;

  include_once __DIR__ . '/../Entity/Blog.php';

  interface BlogRepository
  {
    function insert(Blog $blog): void;
    function remove(int $number): int;
    function findAll(): array;
  }
  class BlogRepositoryImpl implements BlogRepository
  {

    private \PDO $connection;


    public function __construct(\PDO $connection)
    {
      $this->connection = $connection;
    }


    // insert
    function insert(Blog $blog): void
    {
      $SQL = "INSERT INTO blog(author, tittle, content) VALUES (?, ?, ?)";
      $stmt = $this->connection->prepare($SQL);
      $stmt->execute([$blog->getAuthor(), $blog->getTittle(), $blog->getContent()]);
    }

    public function findAll(): array
    {
      $SQL = "SELECT author, tittle, content FROM blog";
      $stmt = $this->connection->prepare($SQL);
      $stmt->execute();

      $result = [];

      foreach ($stmt as $row) {
        $blogList = new Blog(
          author: $row["author"],
          tittle: $row["tittle"],
          content: $row["content"]
        );
        $result[] = $blogList;
      }
      return $result;
    }

    public function remove(int $number): int
    {
      $sql = "SELECT id FROM blog WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->execute([$number]);

      $stmt->fetch();

      $sql = "DELETE FROM blog WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->execute([$number]);
      return true;
    }
  }
}

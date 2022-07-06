<?php

namespace Repository {

    use Model\Blog;

    interface BlogRepository
    {

        function insert(Blog $blog): Blog;

        // function findById(int $id): ?Blog;

        // function findAll(): array;
    }

    class BlogRepositoryImpl implements BlogRepository
    {

        public function __construct(private \PDO $connection)
        {
        }

        public function insert(Blog $blog): Blog
        {
            $sql = "INSERT INTO blog(author, tittle, content) VALUES (?, ?, ?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$blog->getAuthor(), $blog->getTittle(), $blog->getContent()]);

            $id = $this->connection->lastInsertId();
            $blog->setId($id);

            return $blog;
        }

        // public function findById(int $id): ?Blog
        // {
        //     $sql = "SELECT * FROM blog WHERE id = ?";
        //     $statement = $this->connection->prepare($sql);
        //     $statement->execute([$id]);

        //     if ($row = $statement->fetch()) {
        //         return new Blog(
        //             id: $row["id"],
        //             author: $row["author"],
        //             tittle: $row["tittle"],
        //             content: $row["content"]
        //         );
        //     } else {
        //         return null;
        //     }
        // }

        // public function findAll(): array
        // {
        //     $sql = "SELECT * FROM blog";
        //     $statement = $this->connection->query($sql);

        //     $array = [];

        //     while ($row = $statement->fetch()) {
        //         $array[] = new Blog(
        //             id: $row["id"],
        //             author: $row["author"],
        //             tittle: $row["tittle"],
        //             content: $row["content"]
        //         );
        //     }

        //     return $array;
        // }
    }
}

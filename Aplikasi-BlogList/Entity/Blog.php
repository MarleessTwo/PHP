<?php


namespace Entity {

  class Blog
  {
    private int $id;
    private string $author;
    private string $tittle;
    private string $content;

    public function __construct(string $author, string $tittle, string $content)
    {
      $this->author = $author;
      $this->tittle = $tittle;
      $this->content = $content;
    }

    public function setId(int $id): void
    {
      $this->author = $id;
    }

    public function getAuthor(): string
    {
      return $this->author;
    }

    public function setAuthor(string $author): void
    {
      $this->author = $author;
    }

    public function getTittle(): string
    {
      return $this->tittle;
    }

    public function setTittle(string $tittle): void
    {
      $this->tittle =  $tittle;
    }

    public function getContent(): string
    {
      return $this->content;
    }

    public function setContent(string $content): void
    {
      $this->content =  $content;
    }
  }
}

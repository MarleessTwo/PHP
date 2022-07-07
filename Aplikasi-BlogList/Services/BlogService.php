<?php


namespace Services {

  use Entity\Blog;
  use Repository\BlogRepositoryImpl;

  include_once __DIR__ . '/../Entity/Blog.php';
  include_once __DIR__ . '/../Repository/BlogRepository.php';

  interface BlogService
  {
    function addBlogList(string $author, string $title, string $content): void;
    function showBlogList(): void;
    function removeBlogList(int $number): void;
  }

  class BlogServiceImpl implements BlogService
  {
    private BlogRepositoryImpl $blogRepo;

    public function __construct(BlogRepositoryImpl $blogListing)
    {
      $this->blogRepo = $blogListing;
    }

    public function addBlogList(string $author, string $title, string $content): void
    {
      $blogListing = new Blog($author, $title, $content);
      $this->blogRepo->insert($blogListing);
      echo "Berhasil..";
    }

    // Show BlogList

    public function showBlogList(): void
    {
      $blogList = $this->blogRepo->findAll();
      foreach ($blogList as $number => $value) {
        echo "No. " . ($number + 1) . PHP_EOL;
        echo " Pembuat  : {$value->getAuthor()}" . PHP_EOL;
        echo " Judul    : {$value->getTittle()}" . PHP_EOL;
        echo " Konten   : {$value->getContent()}" . PHP_EOL;
      }
    }

    public function removeBlogList(int $number): void
    {
      $this->blogRepo->remove($number);
      echo "Berhasil menghapus" . PHP_EOL;
    }
  }
}

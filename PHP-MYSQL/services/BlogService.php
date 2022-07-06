<?php

namespace Service {
  include_once __DIR__ . '/../Repository/BlogRepository.php';

  use Repository\BlogRepository;
  use Repository\BlogRepositoryImpl;

  interface BlogService
  {
    function showBlog(): void;
  }
  class BlogServiceImpl implements BlogService
  {
    private BlogRepository $blog;

    public function showBlog(): void
    {

      // echo "Pembuat : {$this->blog->getAuthor()}";
      // echo "Judul   : {$this->blog->getTittle()}";
      // echo "Isi     : {$this->blog->getContent()}";
    }
  }
}

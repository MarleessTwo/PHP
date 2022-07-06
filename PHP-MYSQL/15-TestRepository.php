<?php

require_once __DIR__ . '/Helper/GetConnectionHelper.php';
require_once __DIR__ . '/Model/Blog.php';
require_once __DIR__ . '/Repository/BlogRepository.php';

use Repository\BlogRepositoryImpl;
use Model\Blog;

$connection = getConnection();
$repository = new BlogRepositoryImpl($connection);

$blog = new Blog(author: "repository@test.com", tittle: "Test", content: "1. Anjay Bisa Dong, 2. Anjay Bisa Dong");
$newBlog = $repository->insert($blog);
//
// var_dump($newBlog->getId());

// $comment = $repository->findById(32);

$blog = $repository->findById(1);
echo $blog;

$connection = null;

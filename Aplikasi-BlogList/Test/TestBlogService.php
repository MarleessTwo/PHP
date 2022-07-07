<?php


include_once __DIR__ . '/../Config/Database.php';
include_once __DIR__ . '/../Entity/Blog.php';
include_once __DIR__ . '/../Services/BlogService.php';
include_once __DIR__ . '/../Repository/BlogRepository.php';

use Repository\BlogRepositoryImpl;
use Services\BlogServiceImpl;

function addBlogList()
{
  $connection = \Config\Database::getConnection();
  $blogRepo = new BlogRepositoryImpl($connection);
  $blogService = new BlogServiceImpl($blogRepo);
  $blogService->addBlogList("if21dofficial@test.org", "menyatukan text", "ini konten sangat bermanfaat");
}
function showBlogList()
{
  $connection = \Config\Database::getConnection();
  $blogRepo = new BlogRepositoryImpl($connection);
  $blogService = new BlogServiceImpl($blogRepo);
  $blogService->showBlogList();
}
showBlogList();
function removeBlogList()
{
  $connection = \Config\Database::getConnection();
  $blogRepo = new BlogRepositoryImpl($connection);
  $blogService = new BlogServiceImpl($blogRepo);
  $blogService->removeBlogList(32);
  $blogService = new BlogServiceImpl($blogRepo);
  $blogService->removeBlogList(33);
  $blogService = new BlogServiceImpl($blogRepo);
  $blogService->removeBlogList(34);
  $blogService = new BlogServiceImpl($blogRepo);
  $blogService->removeBlogList(35);
}
removeBlogList();
// showBlogList();
// addBlogList();

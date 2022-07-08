<?php

// namespace Service {
//   include_once __DIR__ . '/../Repository/BlogRepository.php';
//   include_once __DIR__ . '/../Helper/GetConnectionHelper.php';

//   use Repository\BlogRepositoryImpl;

//   interface BlogService
//   {
//     function showBlogList();
//   }

//   class BlogServiceImpl implements BlogService
//   {
//     private BlogRepositoryImpl $blogListRepo;
//     function showBlogList()
//     {
//       echo 'a';
//       $connection = getConnection();
//       $repository = new BlogRepositoryImpl($connection);

//       $blogList = $repository->findAll();
//       var_dump($blogList);

//       foreach ($blogList as $number => $value) {
//         echo " {$number} " . PHP_EOL;
//       }
//     }
//   }
// }

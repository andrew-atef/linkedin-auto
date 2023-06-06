<?php 
require_once "../Controllers/ArticleController.php";

$articleController = new ArticleController();
$art = $articleController->fetchArticle();
print_r($art);
echo $art;

// while (true) {
//     echo $articleController->fetchArticle();

//     $interval = mt_rand(300, 1800);
//     sleep($interval);
// }

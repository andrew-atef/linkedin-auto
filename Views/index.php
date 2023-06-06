<?php 
require_once "../Controllers/ArticleController.php";


$interval = mt_rand(30, 100);
sleep($interval);
$articleController = new ArticleController();
$art = $articleController->fetchArticle();
print_r($art);
// echo $art;

<?php 
require_once "../Controllers/ArticleController.php";

$articleController = new ArticleController();

echo $articleController->fetchArticle();
// print_r($articleController->fetchArticle());



?>
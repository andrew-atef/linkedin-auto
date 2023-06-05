<?php 
require_once "../Controllers/ArticleController.php";

$articleController = new ArticleController();

while (true) {
    echo $articleController->fetchArticle();

    $interval = mt_rand(300, 1800);
    sleep($interval);
}



?>
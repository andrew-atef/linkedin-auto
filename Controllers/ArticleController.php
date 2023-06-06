<?php

require_once 'DBController.php';
require_once 'AiController.php';
require_once 'LinkedinController.php';
require_once '../Models/Article.php';

class ArticleController
{
    protected $db;

    public function fetchArticle()
    {
        $rss_feed = simplexml_load_file("https://authenticjobs.com/?feed=job_feed");
        // $rss_feed = simplexml_load_file("https://wuzzuf.net/feeds/all-jobs.xml");
        // $rss_feed = simplexml_load_file("https://tech.hindustantimes.com/rss/tech/news");
        if (!empty($rss_feed)) {
            try {
                $random = rand(0, count($rss_feed->channel->item));
                $article = $rss_feed->channel->item[$random];
                $title = $article->title;
                $description = $article->description;
                $link = $article->link;
                $article = new Article(1, $title, $description, $link);
            } catch (\Throwable $th) {
                return $th;
            }
        }

        // add ! for testing if the article was duplicate
        if ($this->saveArticle($article)) {
            $aiController = new AiController;
            $linkedin = new LinkedinController;
            try {
                $paraphrase = $aiController->paraphraseArticle($article);
                $article->setParaphrase($paraphrase);

                $result = $linkedin->makePost($article);

                return $result;
            } catch (\Throwable $th) {
                return $th;
            }
        } else {
            return "duplicate contacts ( article )";
        }
    }

    private function isExist(Article $article)
    {
        $this->db = new DBController;
        if ($this->db->openConnection()) {
            $query = "select * FROM articles WHERE link = '" . $article->getLink() . "'";
            return $this->db->select($query);
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }

    private function insertArticle(Article $article)
    {
        $this->db = new DBController;
        if ($this->db->openConnection()) {
            $query = "insert INTO articles VALUES ('','" . addslashes($article->getTitle()) . "','" . addslashes($article->getDesc()) . "','" . addslashes($article->getLink()) . "')";
            $result = $this->db->insert($query);
            if ($result != false) {
                $this->db->closeConnection();
                return true;
            } else {
                $this->db->closeConnection();
                return false;
            }
        } else {
            echo "Error in Database Connection";
            return false;
        }
    }


    private function saveArticle(Article $article)
    {
        if (!$this->isExist($article)) {
            try {
                $this->insertArticle($article);
                return true;
            } catch (\Throwable $th) {
                return $th;
            }
        }
    }
}

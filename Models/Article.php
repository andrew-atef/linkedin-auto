<?php

class Article
{
    private $id;
    private $title;
    private $desc;
    private $link;
    

    public function __construct($id, $title, $desc, $link){
        $this->id = $id;
        $this->title = $title;
        $this->desc = $desc;
        $this->link = $link;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDesc(){
        return $this->desc;
    }

    public function getLink(){
        return $this->link;
    }
}

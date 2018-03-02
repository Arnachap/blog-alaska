<?php

class Post
{
    private $_id;
    private $_title;
    private $_intro;
    private $_article;
    private $_postDate;

    public function __construct(array $post)
    {
        $this->setId($post['id']);
        $this->setTitle($post['title']);
        $this->setIntro($post['intro']);
        $this->setArticle($post['article']);
        $this->setPostDate($post['article_date']);
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getIntro()
    {
        return $this->_intro;
    }

    public function setIntro($intro)
    {
        $this->_intro = $intro;
    }

    public function getArticle()
    {
        return $this->_article;
    }

    public function setArticle($article)
    {
        $this->_article = $article;
    }

    public function getPostDate()
    {
        return $this->_postDate;
    }

    public function setPostDate($postDate)
    {
        $this->_postDate = $postDate;
    }
}
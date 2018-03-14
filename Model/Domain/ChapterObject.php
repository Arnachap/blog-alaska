<?php

class ChapterObject
{
    private $_id;
    private $_title;
    private $_intro;
    private $_article;
    private $_chapterDate;

    public function __construct(array $chapter)
    {
        $this->setId($chapter['id']);
        $this->setTitle($chapter['title']);
        $this->setIntro($chapter['intro']);
        $this->setArticle($chapter['article']);
        $this->setChapterDate($chapter['article_date']);
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

    public function getChapterDate()
    {
        return $this->_chapterDate;
    }

    public function setChapterDate($chapterDate)
    {
        $this->_chapterDate = $chapterDate;
    }
}
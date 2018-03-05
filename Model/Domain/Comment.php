<?php

class Comment
{
    private $_id;
    private $_postId;
    private $_author;
    private $_comment;
    private $_commentDate;

    public function __construct(array $comment)
    {
        $this->setId($comment['id']);
        $this->setPostId($comment['post_id']);
        $this->setAuthor($comment['author']);
        $this->setComment($comment['comment']);
        $this->setCommentDate($comment['comment_date_format']);
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getPostId()
    {
        return $this->_postId;
    }

    public function setPostId($postId)
    {
        $this->_postId = $postId;
    }

    public function getAuthor()
    {
        return $this->_author;
    }

    public function setAuthor($author)
    {
        $this->_author = $author;
    }

    public function getComment()
    {
        return $this->_comment;
    }

    public function setComment($comment)
    {
        $this->_comment = $comment;
    }

    public function getCommentDate()
    {
        return $this->_commentDate;
    }

    public function setCommentDate($commentDate)
    {
        $this->_commentDate = $commentDate;
    }
}
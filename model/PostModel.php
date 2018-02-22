<?php

require_once('model/Model.php');

class PostModel extends Model {
    public function getLastPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id DESC LIMIT 5');
    
        return $req;
    }

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id ASC');
    
        return $req;
    }
    
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
    
        return $post;
    }
}
<?php

require_once('Model/Manager/Manager.php');
require_once('Model/Domain/Post.php');

class PostManager extends Manager
{
    public static function getLastPosts()
    {
        $db = self::dbConnect();
        $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id DESC LIMIT 5');

        return $req;
    }

    public static function getPosts()
    {
        $db = self::dbConnect();
        $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id ASC');
    
        return $req;
    }
    
    public static function getPost($postId)
    {
        $db = self::dbConnect();
        $req = $db->prepare('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        $post = new Post($post);

        return $post;
    }
}
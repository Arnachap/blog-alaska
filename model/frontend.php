<?php
function getLastPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id DESC LIMIT 5');

    return $req;
}

function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id ASC');

    return $req;
}

function getPost($postId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function dbConnect()
{
    $db = new PDO('mysql:host=localhost; dbname=blog-alaska; charset=utf8', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET lc_time_names="fr_FR",NAMES utf8'));

    return $db;
}

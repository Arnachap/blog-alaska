<?php

class Chapters extends Database
{
    public static function getLastChapters()
    {
        $db = self::dbConnect();
        $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id DESC LIMIT 5');

        return $req;
    }

    public static function getAllChapters()
    {
        $db = self::dbConnect();
        $req = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id ASC');
    
        return $req;
    }

    public static function getSingleChapter($chapterId)
    {
        $db = self::dbConnect();
        $req = $db->prepare('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles WHERE id = ?');
        $req->execute(array($chapterId));
        $chapter = $req->fetch();

        return $chapter;
    }
}
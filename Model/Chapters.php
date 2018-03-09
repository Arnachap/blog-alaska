<?php

class Chapters extends Database
{
    public static function getLastChapters()
    {
        $db = self::dbConnect();
        $lastChapters = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id DESC LIMIT 5');

        foreach ($lastChapters as $chapter)
        {
            $chapters[] = new ChapterObject($chapter);
        }

        return $chapters;
    }

    public static function getAllChapters()
    {
        $db = self::dbConnect();
        $allChapters = $db->query('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles ORDER BY id ASC');
        
        foreach ($allChapters as $chapter) {
            $chapters[] = new ChapterObject($chapter);
        }

        return $chapters;
    }

    public static function getSingleChapter($chapterId)
    {
        $db = self::dbConnect();
        $req = $db->prepare('SELECT id, title, intro, article, DATE_FORMAT(post_date, \'%d %M %Y\') AS article_date FROM articles WHERE id = ?');
        $req->execute(array($chapterId));
        $chapter = $req->fetch();
        $chapter = new ChapterObject($chapter);

        return $chapter;
    }
}
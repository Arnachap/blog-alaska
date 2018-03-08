<?php

class Comments extends Database
{
    public static function getComments($chapterId)
    {
        $db = self::dbConnect();
        $req = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_format FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $req->execute(array($chapterId));

        return $req;
    }

    public static function postComment($chapterId, $author, $comment)
    {
        $db = self::dbConnect();
        $comment = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $postComment = $comment->execute(array($postId, $author, $comment));

        return $postComment;
    }
}
<?php

require_once('Model/Manager/Manager.php');
require_once('Model/Domain/Comment.php');

class CommentManager extends Manager
{
    public static function getComments($postId)
    {
        $db = self::dbConnect();
        $req = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_format FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $req->execute(array($postId));

        return $req;
    }

    public static function postComment($postId, $author, $comment)
    {
        $db = self::dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }
}
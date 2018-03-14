<?php

class Comments extends Database
{
    public static function getComments($chapterId)
    {
        $db = self::dbConnect();
        $allComments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_format FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $allComments->execute(array($chapterId));
        $comments = [];
        
        foreach ($allComments as $comment)
        {
            $comments[] = new CommentObject($comment);
        }
        
        return $comments;
    }

    public static function postComment(array $commentData)
    {
        $db = self::dbConnect();
        $comment = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');

        return $comment->execute($commentData);
    }
}
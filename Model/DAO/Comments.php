<?php

class Comments extends Database
{
    public static function getComments($chapterId)
    {
        $db = self::dbConnect();
        $allComments = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_format FROM comments WHERE post_id = ? ORDER BY comment_date ASC');
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

    public static function deleteComment($commentId)
    {
        $db = self::dbConnect();
        $deleteComment = $db->prepare('DELETE FROM comments WHERE id = ?');

        return $deleteComment->execute(array($commentId));
    }

    public static function reportComment($commentId)
    {
        $db = self::dbConnect();
        $reportComment = $db->prepare('UPDATE comments SET reported = true WHERE id = ?');

        return $reportComment->execute(array($commentId));
    }

    public static function getReportedComments()
    {
        $db = self::dbConnect();
        $comments = $db->query('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_format FROM comments WHERE reported = true');
        $reportedComments = [];

        foreach ($comments as $comment)
        {
            $reportedComments[] = new CommentObject($comment);
        }

        return $reportedComments;
    }

    public function validComment($commentId)
    {
        $db = self::dbConnect();
        $validComment = $db->prepare('UPDATE comments SET reported = false WHERE id = ?');

        return $validComment->execute(array($commentId));
    }

    public function editComment($newCommentData)
    {
        $db = self::dbConnect();
        $editComment = $db->prepare('UPDATE comments SET comment = ?, reported = false WHERE id = ?');

        return $editComment->execute($newCommentData);
    }
}
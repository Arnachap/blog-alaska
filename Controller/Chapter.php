<?php

class Chapter
{
    public static function singleChapter()
    {
        $chapter = Chapters::getSingleChapter($_GET['id']);
        $chapter = new ChapterObject($chapter);

        $allComments = Comments::getComments($_GET['id']);

        foreach ($allComments as $comment)
        {
            $comments[] = new CommentObject($comment);
        }

        require('view/chapter.php');
    }

    public static function addComment()
    {
        $postComment = Comments::postComment($_GET['id'], $_POST['author'], $_POST['comment']);

        if ($postComment === false)
        {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else
        {
            header('Location: index.php?url=chapter&id=' . $_GET['id']);
        }
    }
}
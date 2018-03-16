<?php

class Chapter
{
    public static function singleChapter()
    {
        $chapter = Chapters::getSingleChapter($_GET['id']);
        $comments = Comments::getComments($_GET['id']);

        require('view/frontend/chapter.php');
    }

    public static function addComment()
    {
        $chapterId = $_GET['id'];
        $author = $_POST['author'];
        $comment = $_POST['comment'];

        if (isset($author) && isset($comment))
        {
            $commentData = array($chapterId, $author, $comment);
            $postComment = Comments::postComment($commentData);

            if ($postComment === false)
            {
                throw new Exception('Impossible d\'ajouter le commentaire !');
            }
            else
            {
                header('Location: /blog-alaska/chapter/' . $chapterId);
            }
        }
    }
}
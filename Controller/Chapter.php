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

        if (isset($_POST['author'], $_POST['comment']))
        {
            $commentData = array($chapterId, $_POST['author'], $_POST['comment']);
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
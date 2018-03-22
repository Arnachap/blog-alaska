<?php

class Reported extends Backend
{
    public function deleteComment()
    {
        if (!self::isLogged()) exit;

        $commentDelete = Comments::deleteComment($_GET['id']);

        if ($commentDelete === false)
        {
            throw new Exception('Impossible de supprimer le commentaire !');
        }
        else
        {
            header('Location: /blog-alaska/admin');
        }
    }

    public function viewReportedComments()
    {
        if (!self::isLogged()) exit;

        $reportedComments = Comments::getReportedComments();

        if (isset($_POST['newComment'], $_POST['commentId']))
        {
            $newCommentData = array($_POST['newComment'], $_POST['commentId']);
            $modifiedComment = Comments::editComment($newCommentData);

            if ($modifiedComment === false)
            {
                throw new Exception('Impossible de modifier le commentaire !');
            }
            else
            {
                header('Location: /blog-alaska/admin');
            }
        }

        require('view/backend/reported.php');
    }

    public function validateComment()
    {
        if (!self::isLogged()) exit;

        $validComment = Comments::validComment($_GET['id']);

        if ($validComment === false)
        {
            throw new Exception('Impossible de valider le commentaire !');
        }
        else
        {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
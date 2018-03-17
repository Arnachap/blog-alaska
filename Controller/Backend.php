<?php

class Backend extends Admin
{
    public function manage()
    {
        if (!self::isLogged()) exit;

        if(!empty($_GET['action']))
        {
            $action = $_GET['action'];

            if (method_exists(__CLASS__, $action))
            {
                self::$action();
            }
        }
        else
        {
            $chapters = Chapters::getAllChapters();

            require('view/backend/admin.php');
        }
    }

    public function viewChapter()
    {
        if (!self::isLogged()) exit;

        $chapter = Chapters::getSingleChapter($_GET['id']);
        $comments = Comments::getComments($_GET['id']);

        require('view/backend/chapter.php');
    }

    public function new()
    {
        if (!self::isLogged()) exit;

        require('view/backend/new.php');
    }

    public function addChapter()
    {
        if (!self::isLogged()) exit;
        
        if (isset($_POST['id'], $_POST['title'],  $_POST['intro'], $_POST['content']))
        {
            $chapterData = array($_POST['id'], $_POST['title'], $_POST['intro'], $_POST['content']);
            $postChapter = Chapters::postChapter($chapterData);

            if ($postChapter === false)
            {
                throw new Exception('Impossible d\'ajouter le chapitre !');
            }
            else
            {
                header('Location: /blog-alaska/admin');
            }
        }
    }

    public function deleteChapter()
    {
        if (!self::isLogged()) exit;

        $chapterDelete = Chapters::deleteChapter($_GET['id']);
        
        if ($chapterDelete === false)
        {
            throw new Exception('Impossible de supprimer le chapitre !');
        }
        else
        {
            header('Location: /blog-alaska/admin');
        }
    }

    public function editChapter()
    {
        if (!self::isLogged()) exit;

        if (isset($_POST['id'], $_POST['title'],  $_POST['intro'], $_POST['content']))
        {
            $chapterData = array($_POST['id'], $_POST['title'], $_POST['intro'], $_POST['content']);
            $postChapter = Chapters::editChapter($chapterData, $_GET['id']);

            if ($postChapter === false)
            {
                throw new Exception('Impossible d\'ajouter le chapitre !');
            }
            else
            {
                header('Location: /blog-alaska/admin');
            }
        }
        else
        {
            $chapter = Chapters::getSingleChapter($_GET['id']);

            require('view/backend/edit.php');
        }
    }

    public function deleteComment()
    {
        if (!self::isLogged()) exit;

        $commentDelete = Comments::deleteComment($_GET['id']);

        if ($commentDelete === false)
        {
            throw new Exception('Impossible de supprimer le Commentaire !');
        }
        else
        {
            header('Location: /blog-alaska/admin');
        }
    }
}
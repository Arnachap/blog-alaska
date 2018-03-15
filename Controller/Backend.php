<?php

class Backend extends Admin
{
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
            var_dump($postChapter);

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
}
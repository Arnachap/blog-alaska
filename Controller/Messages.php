<?php

class Messages extends Backend
{
    public function inbox()
    {
        if (!self::isLogged()) exit;

        $messages = Message::getMessages();

        require('view/backend/inbox.php');
    }

    public function deleteMessage()
    {
        if (!self::isLogged()) exit;

        $messageDelete = Message::deleteMessage($_GET['id']);

        if ($messageDelete === false)
        {
            throw new Exception('Impossible de supprimer le message !');
        }
        else
        {
            header('Location: /blog-alaska/messages&action=inbox');
        }
    }

    public function viewMessage()
    {
        if (!self::isLogged()) exit;

        $messageViewed = Message::viewMessage($_GET['id']);

        if ($messageDelete === false)
        {
            throw new Exception('Impossible de supprimer le message !');
        }
        else
        {
            header('Location: /blog-alaska/messages&action=inbox');
        }
    }
}
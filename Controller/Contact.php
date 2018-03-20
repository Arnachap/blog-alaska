<?php

class Contact
{
    public static function contactForm()
    {
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['message']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $messageData = array($username, $email, $message);
            $postMessage = Message::postMessage($messageData);

            if ($postMessage === false)
            {
                throw new Exception('Impossible d\'envoyer le message !');
            }
            else
            {
                header('Location: /blog-alaska/contact');
            }
        }

        require('view/frontend/contact.php');
    }
}
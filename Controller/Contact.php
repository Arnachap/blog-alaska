<?php

class Contact
{
    public static function contactForm()
    {
        if (isset($_POST['username'], $_POST['email'], $_POST['message']))
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
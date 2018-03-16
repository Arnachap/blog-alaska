<?php

class Admin
{
    protected function isLogged()
    {
        return !empty($_SESSION['logged']);
    }

    public function login()
    {
        if (self::isLogged())
        {
            header('Location: /blog-alaska/admin');
        }

        if (isset($_POST['username'], $_POST['password']))
        {
            $logs = User::login($_POST['username']);

            if (password_verify($_POST['password'], $logs['password']))
            {
                $_SESSION['logged'] = 1;
                header('Location: /blog-alaska/admin');
                exit;
            }
            else
            {
                header('Location: /blog-alaska/login');
            }
        }

        require('view/backend/login.php');
    }

    public function logout()
    {
        if (!self::isLogged())
        {
            exit;
        }

        if (!empty($_SESSION))
        {
            $_SESSION = array();
            session_unset();
            session_destroy();
        }

        header('Location: /blog-alaska/index');
        exit;
    }
}
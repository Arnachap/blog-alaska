<?php

require_once('model/AdminManager.php');

function login()
{
    if (isset($_POST['user'], $_POST['password']))
    {
        $adminManager = new AdminManager();
        $logs = $adminManager->login($_POST['user']);

        if (password_verify($_POST['password'], $logs['password']))
        {
            require('view/backend/manage.php');
        }
        else 
        {
            require('view/backend/login.php');
        }
    }
    else 
    {
        require('view/backend/login.php');
    }
}
<?php

require_once('model/Manager/AdminManager.php');

function login()
{
    if (isset($_POST['user'], $_POST['password']))
    {
        $adminManager = new AdminManager();
        $logs = $adminManager->login($_POST['user']);

        if ($_POST['user'] == $logs['user'] && password_verify($_POST['password'], $logs['password']))
        {
            require('view/backend/manage.php');
        }
        else 
        {
            echo '<h3 class="text-danger">Le nom d\'utilisateur et/ou le mot de passe sont incorrect.</h3>';
            require('view/backend/login.php');
        }
    }
    else 
    {
        require('view/backend/login.php');
    }
}
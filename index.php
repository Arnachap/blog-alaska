<?php

session_start();

require_once('Routes.php');

function __autoload($class_name)
{
    if (file_exists('Model/DAO/' . $class_name . '.php'))
    {
        require_once 'Model/DAO/' . $class_name . '.php';
    }

    else if (file_exists('Model/Domain/' . $class_name . '.php'))
    {
        require_once 'Model/Domain/' . $class_name . '.php';
    }

    else if (file_exists('Controller/' . $class_name . '.php'))
    {
        require_once 'Controller/' . $class_name . '.php';
    }
}
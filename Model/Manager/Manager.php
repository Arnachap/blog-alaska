<?php

abstract class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost; dbname=blog-alaska; charset=utf8', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET lc_time_names="fr_FR",NAMES utf8'));

        return $db;
    }
}
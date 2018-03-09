<?php

abstract class Database
{
    protected static $host = "localhost";
    protected static $dbName = "blog-alaska";
    protected static $username = "root";
    protected static $password = "root";

    protected function dbConnect()
    {
        $db = new PDO('mysql:host=' . self::$host . '; dbname=' . self::$dbName . '; charset=utf8', self::$username, self::$password,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET lc_time_names="fr_FR",NAMES utf8'));

        return $db;
    }
}
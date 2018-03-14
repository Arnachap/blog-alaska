<?php

class User extends Database
{
    public static function login($username)
    {
        $db = self::dbConnect();
        $req = $db->prepare('SELECT * FROM admins WHERE user = ? LIMIT 1');
        $req->execute(array($username));
        $logs = $req->fetch();

        return $logs;
    }
}
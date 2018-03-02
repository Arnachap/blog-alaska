<?php

require_once('model/Manager/Manager.php');

class AdminManager extends Manager
{
    public function login($user)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM admins WHERE user = ? LIMIT 1');
        $req->execute(array($user));
        $logs = $req->fetch();

        return $logs;
    }
}
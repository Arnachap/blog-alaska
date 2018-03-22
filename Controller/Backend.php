<?php

class Backend extends Admin
{
    public function manage()
    {
        if (!self::isLogged()) exit;

        if(!empty($_GET['url']) && !empty($_GET['action']))
        {
            $class = $_GET['url'];
            $action = $_GET['action'];

            $class::$action();
        }
        else
        {
            $chapters = Chapters::getAllChapters();
            $reportedComments = Comments::getReportedComments();

            require('view/backend/admin.php');
        }
    }
}
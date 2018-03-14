<?php

class Home
{
    public static function lastChapters()
    {
        $chapters = Chapters::getLastChapters();

        require('view/frontend/index.php');
    }
}
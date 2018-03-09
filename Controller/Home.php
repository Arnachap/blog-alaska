<?php

class Home
{
    public static function lastChapters()
    {
        $chapters = Chapters::getLastChapters();

        require('view/index.php');
    }
}
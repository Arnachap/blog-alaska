<?php

class Summary
{
    public static function allChapters()
    {
        $chapters = Chapters::getAllChapters();

        require('view/summary.php');
    }
}
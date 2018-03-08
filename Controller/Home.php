<?php

class Home
{
    public static function lastChapters()
    {
        $lastChapters = Chapters::getLastChapters();

        foreach ($lastChapters as $chapter)
        {
            $chapters[] = new ChapterObject($chapter);
        }

        require('view/index.php');
    }
}
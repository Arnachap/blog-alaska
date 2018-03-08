<?php

class Summary
{
    public static function allChapters()
    {
        $allChapters = Chapters::getAllChapters();

        foreach ($allChapters as $chapter) {
            $chapters[] = new ChapterObject($chapter);
        }

        require('view/summary.php');
    }
}
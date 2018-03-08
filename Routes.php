<?php

Route::set('index', function()
{
    Home::lastChapters();
});

Route::set('summary', function()
{
    Summary::allChapters();
});

Route::set('chapter', function()
{
    Chapter::singleChapter();
});

Route::set('addComment', function()
{
    Chapter::addComment();
});

Route::set('contact', function()
{
    require_once('view/contact.php');
});
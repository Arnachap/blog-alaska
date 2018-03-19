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

Route::set('reportComment', function()
{
    Chapter::reportComment();
});

Route::set('contact', function()
{
    require_once('view/frontend/contact.php');
});

Route::set('login', function()
{
    Admin::login();
});

Route::set('logout', function()
{
    Admin::logout();
});

Route::set('admin', function()
{
    Backend::manage();
});
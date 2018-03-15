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
    Admin::manage();
});

Route::set('new', function()
{
    Backend::new();
});

Route::set('addChapter', function()
{
    Backend::addChapter();
});

Route::set('edit', function()
{
    Backend::editChapter();
});

Route::set('delete', function()
{
    Backend::deleteChapter();
});
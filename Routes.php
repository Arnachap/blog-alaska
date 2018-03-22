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
    Contact::contactForm();
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

Route::set('chapterBackend', function()
{
    Chapterbackend::manage();
});

Route::set('reported', function()
{
    Reported::manage();
});

Route::set('messages', function()
{
    Messages::manage();
});
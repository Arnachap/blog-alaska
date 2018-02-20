<?php

require('model/frontend.php');

function lastPosts()
{
    $posts = getLastPosts();

    require('view/frontend/home.php');
}

function listPosts()
{
    $posts = getPosts();

    require('view/frontend/summary.php');
}

function post()
{
    $post = getPost($_GET['id']);

    require('view/frontend/post.php');
}

function contact()
{
    require('view/frontend/contact.php');
}
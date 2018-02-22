<?php

require_once('model/PostManager.php');

function lastPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getLastPosts();

    require('view/frontend/home.php');
}

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('view/frontend/summary.php');
}

function post()
{
    $postManager = new PostManager();
    $post = $postManager->getPost($_GET['id']);

    require('view/frontend/post.php');
}

function contact()
{
    require('view/frontend/contact.php');
}
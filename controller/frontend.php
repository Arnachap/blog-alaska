<?php

require_once('model/PostModel.php');

function lastPosts()
{
    $postModel = new PostModel();
    $posts = $postModel->getLastPosts();

    require('view/frontend/home.php');
}

function listPosts()
{
    $postModel = new PostModel();
    $posts = $postModel->getPosts();

    require('view/frontend/summary.php');
}

function post()
{
    $postModel = new PostModel();

    $post = $postModel->getPost($_GET['id']);

    require('view/frontend/post.php');
}

function contact()
{
    require('view/frontend/contact.php');
}
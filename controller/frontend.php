<?php

require('model/frontend.php');

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
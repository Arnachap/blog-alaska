<?php

require_once('Model/Manager/PostManager.php');
require_once('Model/Manager/CommentManager.php');

class Frontend
{
    public function lastPosts()
    {
        $lastPosts = PostManager::getLastPosts();
        
        foreach ($lastPosts as $post) {
            $posts[] = new Post($post);
        }

        require('view/frontend/home.php');
    }

    public function listPosts()
    {
        $allPosts = PostManager::getPosts();

        foreach ($allPosts as $post) {
            $posts[] = new Post($post);
        }

        require('view/frontend/summary.php');
    }

    public function post()
    {
        $article = PostManager::getPost($_GET['id']);
        $postComments = CommentManager::getComments($_GET['id']);

        foreach ($postComments as $comment) {
            $comments[] = new Comment($comment);
        }

        require('view/frontend/post.php');
    }

    public function addComment($postId, $author, $comment)
    {
        $comments = CommentManager::getComments($_GET['id']);
        $affectedLines = CommentManager::postComment($postId, $author, $comment);

        if ($affectedLines === false)
        {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else
        {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }
}
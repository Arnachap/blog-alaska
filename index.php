<?php
require('Controller/Frontend.php');
require('Controller/Backend.php');

$frontend = new Frontend;
$backend = new Backend;

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'summary') {
            $frontend->listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $frontend->post();
            }
            else {
                throw new Exception('Aucun chapitre ne correspond à la demande.');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $frontend->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'admin') {
            $backend->login();
        }
    }
    else {
        $frontend->lastPosts();
    }
} catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
<?php
require('controller/frontend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'summary') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun chapitre ne correspond à la demande.');
            }
        }
        elseif ($_GET['action'] == 'contact') {
            
        }
    }
    else {
        lastPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
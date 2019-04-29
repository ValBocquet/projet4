<?php
use \valentin\model\front\Manager;
require 'model/front.php';

function home() {
    $Manager = new Manager();
    $posts = $Manager->getPosts();
    require 'views/home.php';
}

function articleOnly() {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $Manager = new Manager();

        $post = $Manager->getPost($_GET['id']);
        $comments = $Manager->getComments($_GET['id']);
        require 'views/article.php';
    }
}

function addComment($postID, $name, $message) {
    $Manager = new Manager();
    $affectedLines = $Manager->postComment($postID, $name, $message);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire');
    } else {
        header('Location: index.php?id=' . $postID. 'action=getPost');
    }
}
<?php
require 'model/front.php';

function home() {
    $posts = getPosts();
    require 'views/home.php';
}

function articleOnly() {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $post = getPost($_GET['id']);
        $comments = getComments($_GET['id']);
        require 'views/article.php';
    }
}

function addComment($postID, $name, $message) {
    $affectedLines = postComment($postID, $name, $message);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire');
    } else {
        header('Location: index.php?id=' . $postID. 'action=getPost');
    }
}
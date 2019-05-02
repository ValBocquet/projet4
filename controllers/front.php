<?php
require 'model/comments.php';
require 'model/articles.php';

function home() {
    $Manager = new ArticlesManager();
    $posts = $Manager->getPosts();
    require 'views/home.php';
}

function articleOnly() {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $ManagerPost = new ArticlesManager();
        $ManagerComment = new CommentsManager();

        $post = $ManagerPost->getPost($_GET['id']);
        $comments = $ManagerComment->getComments($_GET['id']);
        require 'views/article.php';
    }
}

function addComment($postID, $name, $message) {
    $Manager = new CommentsManager();
    $affectedLines = $Manager->postComment($postID, $name, $message);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire');
    } else {
        header('Location: index.php?id=' . $postID. 'action=getPost');
    }

}
function dangerComment($id) {
    $Manager = new CommentsManager();
    $dangerComment = $Manager->dangerComment($id);
}

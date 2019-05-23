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
        $_SESSION['message'] = "Erreur lors de l'envoi du commentaire";
    } else {
        $_SESSION['message'] = "Commentaire bien ajouté !";
    }

}
function dangerComment($id) {
    $Manager = new CommentsManager();
    $dangerComment = $Manager->dangerComment($id);
}

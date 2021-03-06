<?php
require_once 'model/articles.php';
require_once 'model/comments.php';

function getArticlesInformations() {
    $Manager = new ArticlesManager();
    $listPosts = $Manager->getTitleArticle();
    require 'views/template_admin.php';
}

function deleteArticle($id) {
    $ManagerArticle = new ArticlesManager();
    $ManagerComment = new CommentsManager();

    $deleteComment = $ManagerComment->deleteCommentsByArticle($id);
    $deleteArticle = $ManagerArticle->deleteArticle($id);
    $_SESSION['status'] = "Article bien supprimé !";

    return 'Cest good';
}

function modifyArticle($id) {
    $Manager = new ArticlesManager();
    $modify = $Manager->modifyArticle($id);
    require 'views/modify.php';
}
function valideModifArticle($id) {
    $Manager = new ArticlesManager();
    $validModif = $Manager->valideModifArticle($id);
    $_SESSION['status'] = "Article bien modifié !";
}
function newArticle() {
    require 'views/create.php';
}

function createArticle() {
    $Manager = new ArticlesManager();
    $createArticle = $Manager->createArticle();
    return 'Ok';
    $_SESSION['status'] = "Article bien publié !";
}

/* function moderateComments() {
    $Manager = new CommentsManager();
    $moderateComments = $Manager->moderateComments();
    require 'views/moderateComments.php';
} */

function afficherCommentsDanger() {
    $Manager = new CommentsManager();
    $moderateComments = $Manager->afficherDangerComment();
    require 'views/moderateComments.php';
}

function updateComment($id) {
    $Manager = new CommentsManager();
    $updateComment = $Manager->updateComment($id);;
    require 'views/updateComment.php';
}

function confirmUpdateComment($id) {
    $Manager = new CommentsManager();
    $confirmUpdateComment = $Manager->confirmUpdateComment($id);
    return 'ok';
    $_SESSION['status'] = "Commentaire mis à jour";
}

function deleteComment($id) {
    $Manager = new CommentsManager();
    $deleteComment = $Manager->deleteComment($id);
    return 'ok';
    $_SESSION['status'] = "Commentaire supprimé !";
}

function connexion() {
    require 'views/administration.php';
}
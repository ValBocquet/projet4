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
    return 'Ok';
}
function newArticle() {
    require 'views/create.php';
}

function createArticle() {
    $Manager = new ArticlesManager();
    $createArticle = $Manager->createArticle();
    return 'Ok';
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
<?php
use \valentin\model\back\Manager;
require 'model/back.php';

function getArticlesInformations() {
    $Manager = new Manager();
    $listPosts = $Manager->getTitleArticle();
    require 'views/template_admin.php';
}

function deleteArticle($id) {
    $Manager = new Manager();
    $delete = $Manager->deleteArticle($id);
    return 'Cest good';
}

function modifyArticle($id) {
    $Manager = new Manager();
    $modify = $Manager->modifyArticle($id);
    require 'views/modify.php';
}
function valideModifArticle($id) {
    $Manager = new Manager();
    $validModif = $Manager->valideModifArticle($id);
    return 'Ok';
}

function createArticle() {
    $Manager = new Manager();
    $createArticle = $Manager->createArticle();
    return 'Ok';
}

function moderateComments() {
    $Manager = new Manager();
    $moderateComments = $Manager->moderateComments();
    require 'views/moderateComments.php';
}
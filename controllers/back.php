<?php
use \valentin\model\back\Manager;
require 'model/back.php';

function getArticlesInformations() {
    $Manager = new Manager();
    $listPosts = $Manager->getTitleArticle();
    require 'views/template_admin.php';
}
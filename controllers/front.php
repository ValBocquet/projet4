<?php
require 'model/front.php';

function home() {
    $postManager = new Article();
    $posts = $postManager->getPosts();
    require 'views/home.php';
}

function articleOnly() {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $post = getPost(id);
        require 'views/article.php';
    }
}
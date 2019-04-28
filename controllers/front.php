<?php
require 'model/front.php';

function home() {
    $posts = getPosts();
    require 'views/home.php';
}

function articleOnly() {
    if(isset($_GET['id']) && $_GET['id'] > 0) {
        $post = getPost($_GET['id']);
        require 'views/article.php';
    }
}
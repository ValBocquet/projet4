<?php
require 'model/front.php';

function home() {
    $posts = getPosts();
    require 'views/home.php';
}

function articleOnly() {
    $post = getPost($_GET['id']);
    require 'views/article.php';
}
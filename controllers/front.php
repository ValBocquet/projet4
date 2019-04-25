<?php
require 'model/home.php';

function home() {
    $postManager = new Article();
    $posts = $postManager->getPosts();
    require 'views/home.php';
}
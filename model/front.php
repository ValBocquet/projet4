<?php
require 'database.php';

class Article {
/** METHODE APPELANT LES ARTICLES */
    function getPosts() {
        $pdo = connectionBdd();
        $req = $pdo->query('SELECT * FROM articles ORDER BY id DESC LIMIT 0,5');
        return $req;
    }

    function getPost($idGet) {
        $pdo = connectionBdd();
        $req = $pdo->prepare('SELECT * FROM articles WHERE id= :id');
        $req->execute(['id' => $idGet]);
        $post = $req->fetch();
        return $post;
    }
}



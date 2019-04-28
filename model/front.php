<?php
require 'database.php';


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
    function getComments($postID) {
        $pdo = connectionBdd();
        $comments = $pdo->prepare('SELECT * FROM commentaires WHERE article_referent= :article_referent ORDER BY date_publish_comm DESC');
        $comments->execute(['article_referent' => $postID]);
        return $comments;
    }

    function postComment($postID, $name, $message) {
        $pdo = connectionBdd();
        $comments = $pdo->prepare('INSERT INTO commentaires(article_referent, date_publish_comm, name, message) VALUES
(?, NOW(),? ,?)');
        $affectedLines = $comments->execute(array($postID, $name, $message));
        return $affectedLines;
    }


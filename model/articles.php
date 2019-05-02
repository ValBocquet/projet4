<?php
require_once 'model/database.php';

class ArticlesManager extends Manager {

    public function getTitleArticle() {
        $pdo = Manager::connectionBdd();
        $req = $pdo->query('SELECT * FROM articles ORDER BY id DESC');
        return $req;
    }

    public function deleteArticle($id) {
        $pdo = Manager::connectionBdd();
        $req = $pdo->prepare('DELETE FROM articles WHERE id = :id');
        $req->execute(array(
            'id' => $_GET['id']
        ));
        return $req;
    }

    

    public function modifyArticle($id) {
        $pdo = Manager::connectionBdd();
        $req = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
        $req->execute(array(
            'id' => $_GET['id']
        ));
        return $req;
    }

    public function valideModifArticle($id) {
        $pdo = Manager::connectionBdd();
        $req = $pdo->prepare('UPDATE articles SET title = :title, content = :content, date_upload = NOW() WHERE id = :id');
        $req->execute(array(
            'title' => $_POST['title'],
            'content' => $_POST['mytextarea'],
            'id' => $_GET['id']
        ));
        return $req;
    }

    public function createArticle() {
        $pdo = Manager::connectionBdd();
        $req = $pdo->prepare('INSERT INTO articles (title, content, date_upload) VALUES (:title, :content, NOW())');
        $req->execute(array(
            'title' => $_POST['title'],
            'content' => $_POST['mytextarea']
        ));
        return $req;
    }
    function getPosts()
    {
        $pdo = Manager::connectionBdd();
        $req = $pdo->query('SELECT * FROM articles ORDER BY id DESC LIMIT 0,5');
        return $req;
    }

    function getPost($idGet)
    {
        $pdo = Manager::connectionBdd();
        $req = $pdo->prepare('SELECT * FROM articles WHERE id= :id');
        $req->execute(['id' => $idGet]);
        $post = $req->fetch();
        return $post;
    }
    

}
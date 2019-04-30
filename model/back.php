<?php
namespace valentin\model\back;


class Manager {

    public function getTitleArticle() {
        $pdo = connectionBdd();
        $req = $pdo->query('SELECT * FROM articles ORDER BY id DESC');
        return $req;
    }

    public function deleteArticle($id) {
        $pdo = connectionBdd();
        $req = $pdo->prepare('DELETE FROM articles WHERE id = :id');
        $req->execute(array(
            'id' => $_GET['id']
        ));
        return $req;
    }

    public function modifyArticle($id) {
        $pdo = connectionBdd();
        $req = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
        $req->execute(array(
            'id' => $_GET['id']
        ));
        return $req;
    }

    public function valideModifArticle($id) {
        $pdo = connectionBdd();
        $req = $pdo->prepare('UPDATE articles SET title = :title, content = :content, date_upload = NOW() WHERE id = :id');
        $req->execute(array(
            'title' => $_POST['title'],
            'content' => $_POST['mytextarea'],
            'id' => $_GET['id']
        ));
        return $req;
    }

}
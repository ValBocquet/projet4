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

}
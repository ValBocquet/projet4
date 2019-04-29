<?php
namespace valentin\model\back;


class Manager {

    public function getTitleArticle() {
        $pdo = connectionBdd();
        $req = $pdo->query('SELECT * FROM articles ORDER BY id DESC');
        return $req;
    }

}
<?php



$req = $pdo->query('SELECT * FROM articles ORDER BY id DESC LIMIT 0,5');

$req = $req->fetchObject();

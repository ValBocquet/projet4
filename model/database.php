<?php
class Manager {
    function connectionBdd() {
        $pdo = new PDO('mysql:dbname=blog; host=localhost', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

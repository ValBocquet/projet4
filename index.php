<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'controllers/front.php';

  if (empty($_GET['action'])) {
        home();
    } elseif ($_GET['action'] == 'getPost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            articleOnly();
        } else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }

} else {
    home();
}
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

} elseif ($_GET['action'] == 'addComment') {
      if(isset($_GET['id']) && $_GET['id'] > 0) {
          if (!empty($_POST['name']) && !empty($_POST['message'])) {
              addComment($_GET['id'], $_POST['name'], $_POST['message']);
          }
          else {
              echo 'Problème lors de l\'envoi';
          }
      }
  }
  else {
    home();
}
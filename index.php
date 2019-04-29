<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'controllers/front.php';
require 'controllers/back.php';

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
  } elseif ($_GET['action'] == "administration") {
      if(!empty($_POST['name']) && !empty($_POST['password'])) {
          if($_POST['name'] == "admin" && $_POST['password'] == "admin") {
              getArticlesInformations();
          }
          else {
              echo 'mauvaise combinaison de connexion';
          }

      } else {
          echo 'il y a eu un problème lors de la connexion';
      }
  }
  else {
    home();
}
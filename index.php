<?php
session_start();
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
                $_SESSION['message'] = "Commentaire bien envoyé !";
                // header('Location: views/confirm.php');
          }
          else {
              echo 'Problème lors de l\'envoi';
              $errors['addComment'] = "Problème lors de l'envoi du commentaire";
          }
      }
  } elseif ($_GET['action'] == "administration") {
      if(!empty($_POST['name']) && !empty($_POST['password'])) {
          $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
          if($_POST['name'] == "admin" && $pwd == password_verify('admin', $pwd)) {
              $_SESSION['name'] = $_POST['name'];
              header('Location: index.php?action=administration'); // permet d'éviter le souci de cache
              getArticlesInformations();
          }
          else {
              echo 'mauvaise combinaison de connexion';
              $errors['connexion'] = "Mauvaise combinaison de connexion";

          }

      } elseif (!empty($_SESSION['name'])) {
          getArticlesInformations();
      }
      else {
          header('Location: index.php');
      }
  }

  elseif ($_GET['action'] == 'deleteArticle') {
      if(!empty($_GET['id']) && $_GET['id'] > 0) {
          deleteArticle(intval($_GET['id']));
          header('Location: index.php');
      }
  } elseif ($_GET['action'] == "deconnexion") {
      session_destroy();
      header('Location: index.php');
  } elseif ($_GET['action'] == 'modify') {
      if(!empty($_GET['id']) && $_GET['id'] > 0) {
          modifyArticle($_GET['id']);
      }

  } elseif ($_GET['action'] == 'comments') {
      if (!empty($_SESSION['name'])) {
          afficherCommentsDanger();

      } else {
          header('Location: index.php');
      }
  } elseif ($_GET['action'] == 'validModif') {
      if(!empty($_GET['id']) && $_GET['id'] > 0) {
          valideModifArticle($_GET['id']);
          header('Location: index.php?id='. $_GET['id'].'&action=getPost');
        }
      } elseif ($_GET['action'] == 'createArticle') {
            if (!empty($_POST['title']) && !empty($_POST['mytextarea'])) {
            createArticle();
            header('Location: index.php');
            }
        }
        elseif($_GET['action'] == "newArticle") {
            if(!empty($_SESSION['name'])) {
                newArticle();
            } else {
                header('Location: index.php?action=administration');
            }
        }

        elseif($_GET['action'] == 'danger') {
            dangerComment($_GET['id']);
        }

        elseif ($_GET['action'] == 'updateComment') {
            if(!empty($_GET['id']) && $_GET['id'] > 0) {
                updateComment($_GET['id']);
            }
        }
        elseif ($_GET['action'] == 'confirmUpdateComment') {
            if(!empty($_POST['mytextarea']) && !empty($_GET['id'])) {
                confirmUpdateComment($_GET['id']);
                header('Location: index.php');
            }
        }
        elseif ($_GET['action'] == "deleteComment") {
            if(!empty($_GET['id']) && $_GET['id'] > 0) {
                deleteComment($_GET['id']);
                header('Location: index.php');
            }
        }

        elseif($_GET['action'] == "connexion") {
            if (empty($_SESSION['name'])) {
                connexion(); // renvoi le panel car déjà connecté
            } else {
                header('Location: index.php?action=administration');
            }
        }

  else {
    home();
}
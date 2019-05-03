<?php
require_once 'model/database.php';
class CommentsManager extends Manager
{

    public function deleteCommentsByArticle($idArticle) {
        $pdo = Manager::connectionBdd();
        $req = $pdo->prepare('DELETE FROM commentaires WHERE article_referent = :id');
        $req->execute(array(
            'id' => $idArticle
        ));
        return $req;
    } 

    /* public function moderateComments() {
        $pdo = Manager::connectionBdd();
        $req = $pdo->query('SELECT * FROM commentaires ORDER BY id DESC');
        return $req;
    } */

    function getComments($postID) {
        $pdo = Manager::connectionBdd();
        $comments = $pdo->prepare('SELECT * FROM commentaires WHERE article_referent= :article_referent ORDER BY date_publish_comm DESC');
        $comments->execute(['article_referent' => $postID]);
        return $comments;
    }

    function postComment($postID, $name, $message){
        $pdo = Manager::connectionBdd();
        $comments = $pdo->prepare('INSERT INTO commentaires(article_referent, date_publish_comm, name, message) VALUES
(?, NOW(),? ,?)');
        $affectedLines = $comments->execute(array($postID, $name, $message));
        return $affectedLines;
    }

    function dangerComment($id) {
        $pdo = Manager::connectionBdd();
        $comments = $pdo->prepare('UPDATE commentaires SET danger = 1 WHERE id = :id');
        $comments->execute(array(
            'id' => $id
        ));
        return $comments;
        
    }

    function afficherDangerComment() {
        $pdo = Manager::connectionBdd();
        $commentsDanger = $pdo->query('SELECT * FROM commentaires ORDER BY danger DESC, date_publish_comm DESC');
        return $commentsDanger;
    }

    function updateComment($id) {
        $pdo = Manager::connectionBdd();
        $updateComment = $pdo->prepare('SELECT id, message FROM commentaires WHERE id = :id');
        $updateComment->execute(array(
            'id' => $id
        ));
        return $updateComment;
    }

    function confirmUpdateComment($id) {
        $pdo = Manager::connectionBdd();
        $confirmUpdateComment = $pdo->prepare('UPDATE commentaires SET message = :message WHERE id = :id');
        $confirmUpdateComment->execute(array(
            'message' => $_POST['mytextarea'],
            'id' => $id
        ));
        return $confirmUpdateComment;
    }
}
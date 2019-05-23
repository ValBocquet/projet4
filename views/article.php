<?php
$title = $post['title'];
$dateUpload = date_format(new DateTime($post['date_upload']), 'd-m-Y');
ob_start();
?>

<!-- Single Content -->
<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <article class="center-relative">
            <?php
                if(!empty($_SESSION['message'])) {

                    ?>

                    <span class="dangerMessage"><?= $_SESSION['message']; ?></span>
                    <?php unset($_SESSION['message']);

                }


            ?>
            <h1 class="entry-title">
                <?= $post['title']; ?>
            </h1>
            <div class="entry-date published"><?= $dateUpload; ?></div>
            <div class="clear"></div>
                <?= $post['content']; ?>

            <div class="clear"></div>
            <div class="commentaires">
                <h2>Commentaires</h2>
                <?php
                while ($comment = $comments->fetch()){
                    $dateComm = date_format(new DateTime($comment['date_publish_comm']), 'd-m-Y');
                    ?>
                    <div class="commentaire">
                        <a href="index.php?action=danger&ref=<?= $_GET['id'];?>&id=<?= $comment['id'];?>"><i class="fas fa-exclamation-triangle" id="danger"></i></a>
                        <p><?= htmlspecialchars($comment['name'])?> le <?= $dateComm; ?> : </p>
                        <p><?= htmlspecialchars($comment['message'])?></p>
                    </div>
                    <hr>
                <?php
                }


                ?>
            </div>
                <div class="commentaire">
                    <div class="contact-form">
                        <form method="post" action="index.php?id=<?= $post['id']; ?>&action=addComment ">
                            <p><input id="name" type="text" name="name" placeholder="Name"></p>
                            <p><textarea id="message" name="message" placeholder="Message"></textarea></p>
                            <p><input type="submit" value="Ajouter le commentaire"></p>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>

        </article>
    </div>
</div>
<?php

unset($_SESSION['status']);
$content = ob_get_clean();
require 'template_article.php'; ?>

<?php

$title = "Ajouter un commentaire";
ob_start();
?>

<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <article class="center-relative">
            <h1 class="entry-title">

            </h1>
            <div class="entry-date published"></div>
            <div class="clear"></div>


            <div class="clear"></div>
            <div class="commentaires">
                <h2>Création d'un article</h2>
                <form action="../index.php?action=createArticle" method="post">
                    <label for="title">Titre : </label><input type="text" name="title" id="title">
                    <textarea name="mytextarea" id="mytextarea"></textarea>
                    <input type="submit" value="Poster">
                </form>
                <div class="clear"></div>

        </article>
    </div>
</div>

<?php
$content = ob_get_clean();
require 'views/template_article.php';
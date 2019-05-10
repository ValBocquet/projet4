<?php
if(empty($_SESSION['name'])) {
    session_start();
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title>Administration Panel</title>
    <?php require 'header.php'; ?>


<!--[if lt IE 9]>
<script src="public/js/html5.js"></script>
<![endif]-->

</head>


<body class="single-post">


<!-- Left Sidebar -->
<?php require 'menu.php'; ?>

<!-- Single Content -->
<!-- Single Content -->
<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <article class="center-relative">
            <h1 class="entry-title">

            </h1>
            <div class="entry-date published"></div>
            <div class="clear"></div>


            <div class="clear"></div>
            <div class="commentaires">
                <h2>Administration</h2>
                <p>Bonjour <?= $_SESSION['name']; ?></p>
                <?php

                while($datas = $listPosts->fetch()) {
                    ?>
                <table class="blueTable">
                    <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Voir</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><?= $datas['title'];?> (id = <?= $datas['id'];?>)</td>
                        <td><a href="index.php?id=<?= $datas['id'];?>&action=getPost">Lire</a></td>
                        <td><a href="index.php?id=<?= $datas['id'];?>&action=modify"><i class="fas fa-pencil-alt" id="pencil"></i></a></td>
                        <td><a href="index.php?id=<?= $datas['id'];?>&action=deleteArticle"><i class="fas fa-trash" id="trash"></i></a></td>
                    </tr>
                    </tbody>
                </table>
                <?php
                }
                ?>
            </div>
            <div id="createArticle">
                <a href="index.php?action=newArticle">Création d'un article</a>
            </div>


            <div class="clear"></div>

        </article>
    </div>
</div>


<!-- Footer -->

<?php require_once 'footer.php'; ?>
</body>
</html>

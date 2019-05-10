<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title>Modération des commentaires</title>
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
                <h2>Gérer les commentaires</h2>
                <p>Bonjour <?= $_SESSION['name']; ?></p>
                <?php

                while ($datas = $moderateComments->fetch()) {
                    ?>
                    <table class="blueTable">
                        <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Auteur</th>
                            <th>Message</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <?php
                            if ($datas['danger'] == 1) {
                                ?>
                                <td class="danger"><?= $datas['id']; ?> - <a
                                            href="index.php?id=<?= $datas['article_referent']; ?>&action=getPost">voir
                                        article</a></td>
                                <td class="danger"><?= $datas['name']; ?></td>
                                <td class="danger"><?= $datas['message']; ?></td>
                                <td class="danger"><a href="index.php?action=updateComment&id=<?= $datas['id'];?>"><i class="fas fa-pencil-alt"></i></a></td>
                                <td class="danger"><a href="index.php?action=deleteComment&id=<?= $datas['id'];?>"><i class="fas fa-trash-alt"></i></a></td>
                                <?php
                            } else {
                                ?>
                                <td><?= $datas['id']; ?> - <a
                                            href="index.php?id=<?= $datas['article_referent']; ?>&action=getPost">voir
                                        article</a></td>
                                <td><?= $datas['name']; ?></td>
                                <td><?= $datas['message']; ?></td>
                                <td><a href="index.php?action=updateComment&id=<?= $datas['id'];?>"><i class="fas fa-pencil-alt"></i></a></td>
                                <td><a href="index.php?action=deleteComment&id=<?= $datas['id'];?>"><i class="fas fa-trash-alt"></i></a></td>
                                <?php
                            }
                            ?>


                            <!--<td><a href="index.php?id=<?= $datas['id']; ?>&action=modify"><img src="public/images/pencil-alt-solid.svg" id="pencil" alt="pencil"></a></td>
                            <td><a href="index.php?id=<?= $datas['id']; ?>&action=deleteArticle"><img src="public/images/trash-alt-solid.svg" alt="poubelle" id="trash"></a></td> -->
                        </tr>
                        </tbody>
                    </table>
                    <?php
                }
                ?>
            </div>
            <div id="createArticle">
                <a href="views/create.php">Création d'un article</a>
            </div>


            <div class="clear"></div>

        </article>
    </div>
</div>


<!-- Footer -->

<!--Load JavaScript-->
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type='text/javascript' src='public/js/imagesloaded.pkgd.js'></script>
<script type='text/javascript' src='public/js/jquery.nicescroll.min.js'></script>
<script type='text/javascript' src='public/js/jquery.smartmenus.min.js'></script>
<script type='text/javascript' src='public/js/jquery.carouFredSel-6.0.0-packed.js'></script>
<script type='text/javascript' src='public/js/jquery.mousewheel.min.js'></script>
<script type='text/javascript' src='public/js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='public/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='public/js/main.js'></script>
</body>
</html>

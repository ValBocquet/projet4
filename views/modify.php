<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title>Administration Panel</title>
    <?php require 'header.php'; ?>    
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

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
                <h2>Modification</h2>

                        <?php
                        while($datas = $modify->fetch()) {
                            ?>
                        <form method="post" action="index.php?id=<?= $datas['id'];?>&action=validModif">
                            <label for="title">Titre : </label><input type="text" name="title" id="title" value="<?= $datas['title'];?>">
                         <textarea name="mytextarea" id="mytextarea">
                            <?= $datas['content'];
                            ?>
                        </textarea> <?php
                        }

                        ?>
                    <input type="submit" value="Modifier">
                </form>
            <div class="clear"></div>

        </article>
    </div>
</div>


<!-- Footer -->

<?php require_once 'footer.php'; ?>

</body>
</html>

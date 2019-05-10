<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title><?= $title ?></title>
    <?php require 'header.php'; ?>

    

    <!--[if lt IE 9]>
    <script src="public/js/html5.js"></script>
    <![endif]-->

</head>


<body class="home blog">

<!-- Preloader Gif -->

<!-- Left Sidebar -->
<?php require 'menu.php'; ?>

<!-- Home Content -->
<div id="content" class="site-content">
    <div id="blog-wrapper">
        <div class="blog-holder center-relative">


            <?= $content; ?>


        </div>
        <div class="clear"></div>
    </div>

    <div class="featured-image-holder">
        <div class="featured-post-image" style="background-image: url(public/images/home.jpg)"></div>

    </div>
    <div class="clear"></div>
</div>



<!--Load JavaScript-->
<?php require_once 'footer.php'; ?>
</body>
</html>

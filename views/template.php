<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title><?= $title ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="public/images/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css"  href='public/css/clear.css' />
    <link rel="stylesheet" type="text/css"  href='public/css/common.css' />
    <link rel="stylesheet" type="text/css"  href='public/css/font-awesome.min.css' />
    <link rel="stylesheet" type="text/css"  href='public/css/carouFredSel.css' />
    <link rel="stylesheet" type="text/css"  href='public/css/sm-clean.css' />
    <link rel="stylesheet" type="text/css"  href='public/css/style.css' />
    

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

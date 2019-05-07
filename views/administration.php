<?php
session_start();
if(!empty($_SESSION['name'])) {
    header('Location: ../index.php?action=administration');
}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title>Administration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Template by Colorlib" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="author" content="Colorlib" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="../public/images/favicon.png" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css"  href='../public/css/clear.css' />
    <link rel="stylesheet" type="text/css"  href='../public/css/common.css' />
    <link rel="stylesheet" type="text/css"  href='../public/css/font-awesome.min.css' />
    <link rel="stylesheet" type="text/css"  href='../public/css/carouFredSel.css' />
    <link rel="stylesheet" type="text/css"  href='../public/css/sm-clean.css' />
    <link rel="stylesheet" type="text/css"  href='../public/css/style.css' />



    <!--[if lt IE 9]>
    <script src="../public/js/html5.js"></script>
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
                    <div class="contact-form">
                        <form method="post" action="../index.php?action=administration">
                            <p><input id="name" type="text" name="name" placeholder="Name"></p>
                            <p><input id="password" type="password" name="password"></p>
                            <p><input type="submit" value="Se connecter"></p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

        </article>
    </div>
</div>


<!-- Footer -->

<!--Load JavaScript-->
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type='text/javascript' src='../public/js/imagesloaded.pkgd.js'></script>
<script type='text/javascript' src='../public/js/jquery.nicescroll.min.js'></script>
<script type='text/javascript' src='../public/js/jquery.smartmenus.min.js'></script>
<script type='text/javascript' src='../public/js/jquery.carouFredSel-6.0.0-packed.js'></script>
<script type='text/javascript' src='../public/js/jquery.mousewheel.min.js'></script>
<script type='text/javascript' src='../public/js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='../public/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='../public/js/main.js'></script>
</body>
</html>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <title><?= $title; ?></title>
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

<?= $content; ?>


<!-- Footer -->

<?php require_once 'footer.php'; ?>
</body>
</html>

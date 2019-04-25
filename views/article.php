<?php
$title = 'Titre';
var_dump($post);
ob_start();
?>

<!-- Single Content -->
<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <article class="center-relative">
            <h1 class="entry-title">
                I like to reinvent myself
            </h1>
            <div class="entry-date published">February 12, 2016</div>
            <div class="clear"></div>


            <div class="clear"></div>
        </article>
    </div>
</div>
<?php


$content = ob_get_clean();
require 'template_article.php'; ?>

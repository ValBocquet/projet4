<?php
$title = $post['title'];

ob_start();
?>

<!-- Single Content -->
<div id="content" class="site-content center-relative">
    <div class="single-post-wrapper content-1070 center-relative">

        <article class="center-relative">
            <h1 class="entry-title">
                <?= $post['title']; ?>
            </h1>
            <div class="entry-date published"><?= $post['date_upload']; ?></div>
            <div class="clear"></div>

                <?= $post['content']; ?>
            <div class="clear"></div>
        </article>
    </div>
</div>
<?php


$content = ob_get_clean();
require 'template_article.php'; ?>

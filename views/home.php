<?php

$title = 'Accueil du blog';

ob_start();

while ($datas = $posts->fetch()) {
    $dateUpload = date_format(new DateTime($datas['date_upload']), 'd-m-Y');
    ?>
    <article id="post-1" class="blog-item-holder featured-post">
                        <div class="entry-content relative">
                            <div class="content-1170 center-relative">

                                <div class="entry-date published"><?= $dateUpload ?></div>
                                <h2 class="entry-title">
                                    <a href="index.php?id=<?= $datas['id'] .'&action=getPost'?>"><?= $datas['title'] ?></a>
                                </h2>
                                <div class="excerpt">
                                    <?php $excerpt = substr($datas['content'], 0, 250); ?>
                                    <?= $excerpt; ?>
                                    <a class="read-more" href="article.php?id=<?= $datas['id'] ?>"></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
    </article>
<?php
}

$content = ob_get_clean();
require 'template.php'; ?>

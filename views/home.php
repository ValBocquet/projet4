<?php

$title = 'Accueil du blog';

ob_start();

while ($datas = $posts->fetch()) {
    $dateUpload = date_format(new DateTime($datas['date_upload']), 'd-m-Y H:i:s');
    ?><p class="lead"> <?= $datas['title']; ?> </p>
    <span>Publié le <?= ($dateUpload); ?> </span>

    <p><?= ($datas['content']) ?> </p> <?php ;
}

$content = ob_get_clean();
require 'template.php'; ?>

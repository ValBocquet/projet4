<?php
while ($datas = $req->fetch()) {
    $dateUpload = date_format(new DateTime($datas['date_upload']), 'd-m-Y H:i:s');
    ?><p class="lead"> <?= $datas['title']; ?> </p>
    <span>Publié le <?= ($dateUpload); ?> </span>

    <p><?= ($datas['content']) ?> </p> <?php ;


}


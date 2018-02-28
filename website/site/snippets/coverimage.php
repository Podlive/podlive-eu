<?php if($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img src="<?= $image->url() ?>" alt="" width="100%" height="auto"/>
  </figure>
<?php endif ?>

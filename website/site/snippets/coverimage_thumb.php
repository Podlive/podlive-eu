<? if($image = $item->coverimage()->toFile()): ?>
  <figure class="left">
    <img src="<?= $image->url() ?>" alt="" width="210px" height="auto"/>
  </figure>
<? endif ?>

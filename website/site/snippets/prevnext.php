<?php

$directionPrev = @$flip ? 'right' : 'left';
$directionNext = @$flip ? 'left'  : 'right';

$titlePrev = @$flip ? $page->paginationNewerText() : $page->paginationOlderText();
$titleNext = @$flip ? $page->paginationOlderText() : $page->paginationNewerText();

if($page->hasNextVisible() || $page->hasPrevVisible()): ?>
  <nav class="pagination <?= !@$flip ?: ' flip' ?> wrap cf">

    <?php if($page->hasPrevVisible()): ?>
      <a class="pagination-item <?= $directionPrev ?>" href="<?= $page->prevVisible()->url() ?>" rel="prev" title="<?= $page->prevVisible()->title()->html() ?>">
        <?= $titlePrev ?>
      </a>
    <?php endif ?>

    <?php if($page->hasNextVisible()): ?>
      <a class="pagination-item <?= $directionNext ?>" href="<?= $page->nextVisible()->url() ?>" rel="next" title="<?= $page->nextVisible()->title()->html() ?>">
        <?= $titleNext ?>
      </a>
    <?php endif ?>

  </nav>
<?php endif ?>

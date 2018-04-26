<?php snippet('header', array('context' => 'blog')) ?>

	<section class="article">
		<div class="container blog">
      <article>
          <header class="article-header">
              <h1 class="article-title"><?= $page->title()->html() ?></h1>
              <?php snippet('article-date-author', array('article' => $page)) ?>
          </header>

          <div class="text">
						<?php snippet('coverimage', $page) ?>
						<?= $page->text()->kirbytext() ?>
          </div>
      </article>

			<?php snippet('prevnext', ['flip' => false, 'page' => $page]) ?>

		</div>
	</section>

<?php snippet('footer') ?>

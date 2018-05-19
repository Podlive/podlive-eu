<?php snippet('header', array('context' => 'default')) ?>

  <main class="main" role="main">
	<section class="article">
		<div class="container blog">
	      <article>
	          <header class="article-header">
			      <h1><?= $page->title()->html() ?></h1>
			      <div class="intro text">
			        <?= $page->intro()->kirbytext() ?>
			      </div>
			      <hr />
	          </header>
	
	          <div class="text">
			  <?= $page->text()->kirbytext() ?>
	          </div>
	      </article>
		</div>
	</section>
  </main>

<?php snippet('footer') ?>

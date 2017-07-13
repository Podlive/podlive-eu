<?php snippet('header_blog') ?>

<header class="articles-header">
	<div class="column full">
		<h2><?= $page->title()->text() ?></h2>
	</div>
</header>


<?php if($articles->count()): ?>
	<section class="articles">
		<div class="container">
		<?php
			foreach($articles as $article):

			$author = "";
			if($article->author()) {
				$author = ", <strong>".$article->author()->text()."</strong>";
			}
		?>
            <article>
                <header class="article-header">
                    <h2 class="article-title"><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
                    <p class="article-date"><?= $article->date('%A, %d.%m.%Y').$author ?></p>
                </header>

                <div class="text">
					<?php snippet('coverimage_thumb', $article) ?>
					<?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                    <a href="<?= $article->url() ?>" class="article-more"><?= $page->readMoreText()->text() ?></a>
                </div>
            </article>
		<?php endforeach ?>
		</div>
	</section>

<?php snippet('pagination') ?>

<?php else: ?>
	<section class="article-list">
		<div class="container">
			<div class="row clearfix">
				<div class="column full"><?= $page->noArticlesText()->kirbytext() ?></div>
			</div>
		</div>
	</section>
<?php endif ?>

<?php snippet('footer') ?>

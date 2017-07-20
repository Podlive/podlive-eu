<? snippet('header', array('context' => 'blog')) ?>

<header class="articles-header">
	<div class="column full">
	</div>
</header>


<? if($articles->count()): ?>
	<section class="articles">
		<div class="container">
		<? foreach($articles as $article): ?>
            <article>
                <header class="article-header">
                    <h2 class="article-title"><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
                    <? snippet('article-date-author', array('article' => $article)) ?>
                </header>

                <div class="text">
					<? snippet('coverimage_thumb', $article) ?>
					<?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
                    <a href="<?= $article->url() ?>" class="article-more"><?= $page->readMoreText()->text() ?></a>
                </div>
            </article>
		<? endforeach ?>
		</div>
	</section>

<? snippet('pagination', array('page' => $page)) ?>

<? else: ?>
	<section class="article-list">
		<div class="container">
			<div class="row clearfix">
				<div class="column full"><?= $page->noArticlesText()->kirbytext() ?></div>
			</div>
		</div>
	</section>
<? endif ?>

<? snippet('footer') ?>

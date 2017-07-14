<? snippet('header_blog') ?>

	<section class="article">
		<div class="container blog">
            <article>
                <header class="article-header">
                    <h1 class="article-title"><?= $page->title()->html() ?></h1>
                    <? snippet('article-date-author', array('article' => $page)) ?>
                </header>

                <div class="text">
					<? snippet('coverimage', $page) ?>
                    <?= $page->text()->kirbytext() ?>
                </div>
            </article>

	    <? snippet('prevnext', ['flip' => true, 'page' => $page]) ?>

		</div>
	</section>

<? snippet('footer') ?>



<? snippet('header', array('context' => 'podcast', 'channel' => $channel)) ?>

<section class="article">
	<div class="container blog">
        <article>
            <header class="article-header">
                <h1 class="article-title"><?= $page->title()->html() ?></h1>
            </header>

            <div class="text">
				<? snippet('coverimage', $page) ?>
                <?= $page->text()->kirbytext() ?>
            </div>
        </article>

	</div>
</section>

<? snippet('footer') ?>

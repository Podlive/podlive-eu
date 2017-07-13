<?php
	$author = "";
	if($page->author()) {
		$author = ", <strong>".$page->author()->text()."</strong>";
	}

	snippet('header_blog')
?>

	<section class="article">
		<div class="container blog">
            <article>
                <header class="article-header">
                    <h1 class="article-title"><?= $page->title()->html() ?></h1>
                    <p class="article-date"><?= $page->date('%A, %d.%m.%Y').$author ?></p>
                </header>

                <div class="text">
					<?php snippet('coverimage', $page) ?>
                    <p><?= $page->text()->kirbytext() ?></p>
                </div>
            </article>

	    <?php snippet('prevnext', ['flip' => true]) ?>

		</div>
	</section>

<?php snippet('footer') ?>

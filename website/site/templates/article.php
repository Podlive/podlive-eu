<?
$author     	= $page->author();
$firstname		= $site->user($author)->firstname;
$lastname		= $site->user($author)->lastname;
$email			= $site->user($author)->email;
$firstLastName	= $firstname.' '.$lastname;

$showAuthor		= $page->showAuthor()->bool();
$linkAuthor		= $page->linkAuthor()->bool();


snippet('header_blog')
?>

	<section class="article">
		<div class="container blog">
            <article>
                <header class="article-header">
                    <h1 class="article-title"><?= $page->title()->html() ?></h1>
                    <p class="article-date">
                        <?= $page->date('%A, %d.%m.%Y') ?>
                        <? if($showAuthor): ?>
							<? if($linkAuthor): ?>
								- <strong><a href="mailto:<?= $email ?>?Subject=[Blog Post] <?= $page->title()->text() ?>"><?= $firstLastName ?></a></strong>
							<? else: ?>
								- <strong><?= $firstLastName ?></strong>
							<? endif ?>
						<? endif ?>
                    </p>
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


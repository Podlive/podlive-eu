<?
$author     	= $article->author();
$firstname		= $site->user($author)->firstname;
$lastname		= $site->user($author)->lastname;
$email			= $site->user($author)->email;
$firstLastName	= $firstname.' '.$lastname;

$showAuthor		= $article->showAuthor()->bool();
$linkAuthor		= $article->linkAuthor()->bool();

?>
                    <p class="article-date">
                        <?= $article->date('%A, %d.%m.%Y') ?>
                        <? if($showAuthor): ?>
							<? if($linkAuthor): ?>
								- <strong><a href="mailto:<?= $email ?>?Subject=[Blog Post] <?= $page->title()->text() ?>"><?= $firstLastName ?></a></strong>
							<? else: ?>
								- <strong><?= $firstLastName ?></strong>
							<? endif ?>
						<? endif ?>
                    </p>

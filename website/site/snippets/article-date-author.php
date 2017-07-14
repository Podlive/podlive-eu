<?
$author     	= $article->author();
$firstname		= $site->user($author)->firstname;
$lastname		= $site->user($author)->lastname;
$firstLastName	= $firstname.' '.$lastname;

$showAuthor		= $site->user($author)->showAuthor();
$linkAuthor		= $site->user($author)->linkAuthor();

$linkedField 	  = $site->user($author)->linkAuthor();
$linkedFieldValue = $site->user($author)->$linkedField();

?>
                    <p class="article-date">
                        <?= $article->date('%A, %d.%m.%Y') ?>
                        <? if($showAuthor): ?>
							<? if($linkAuthor): ?>
								<? switch($linkedField):
									case 'email': ?>
										- <strong><a href="mailto:<?= $linkedFieldValue ?>?Subject=[Blog Post] <?= $page->title()->text() ?>"><?= $firstLastName ?></a></strong>
									<? break; ?>

									<? case 'twitter': ?>
										- <strong><a href="<?= 'https://twitter.com/'.str_replace('@', '', trim($linkedFieldValue)) ?>"><?= $firstLastName ?></a></strong>
									<? break; ?>

									<? case 'github': ?>
										- <strong><a href="<?= 'https://github.com/'.trim($linkedFieldValue) ?>"><?= $firstLastName ?></a></strong>
									<? break; ?>

									<? default: ?>
										<? if(empty($linkedFieldValue)): ?>
											- <strong><?= $firstLastName ?></strong>
										<? else: ?>
										- <strong><a href="<?= trim($linkedFieldValue) ?>"><?= $firstLastName ?></a></strong>
										<? endif ?>
									<? break; ?>
								<? endswitch; ?>

							<? else: ?>
								- <strong><?= $firstLastName ?></strong>
							<? endif ?>
						<? endif ?>
                    </p>

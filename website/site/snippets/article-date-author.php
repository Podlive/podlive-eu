<?php
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
                        <?php if($showAuthor): ?>
							<?php if($linkAuthor): ?>
								<?php switch($linkedField):
									case 'email': ?>
										- <strong><a href="mailto:<?= $linkedFieldValue ?>?Subject=[Blog Post] <?= $page->title()->text() ?>"><?= $firstLastName ?></a></strong>
									<?php break; ?>

									<?php case 'twitter': ?>
										- <strong><a href="<?= 'https://twitter.com/'.str_replace('@', '', trim($linkedFieldValue)) ?>"><?= $firstLastName ?></a></strong>
									<?php break; ?>

									<?php case 'github': ?>
										- <strong><a href="<?= 'https://github.com/'.trim($linkedFieldValue) ?>"><?= $firstLastName ?></a></strong>
									<?php break; ?>

									<?php default: ?>
										<?php if(empty($linkedFieldValue)): ?>
											- <strong><?= $firstLastName ?></strong>
										<?php else: ?>
										- <strong><a href="<?= trim($linkedFieldValue) ?>"><?= $firstLastName ?></a></strong>
										<?php endif ?>
									<?php break; ?>
								<?php endswitch; ?>

							<?php else: ?>
								- <strong><?= $firstLastName ?></strong>
							<?php endif ?>
						<?php endif ?>
                    </p>

<?php
	$headerImage1x = $site->image($site->headerImage1x())->url();
	$headerImage2x = $site->image($site->headerImage2x())->url();
?>
<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">

<?php snippet('html_header') ?>

<body>
	<nav class="top">
		<div class="podlive"><?= $site->title()->text() ?></div>
		<ul>
			<?php foreach($site->languages() as $language): ?>
			<li<?php e($site->language() == $language, ' class="active"') ?>>
			<a href="<?= $page->url($language->code()) ?>" class="language <?= $language->code() ?>"></a>
			</li>
			<?php endforeach ?>
		</ul>
	</nav>

	<header class="hero">
		<div class="container devices">
			<img class="device" src="<?= $headerImage1x ?>" srcset="<?= $headerImage1x ?> 1x, <?= $headerImage2x ?> 2x">
		</div>
	</header>

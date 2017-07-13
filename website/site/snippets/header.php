<?php
	$headerImage1x = $site->image($site->headerImage1x())->url();
	$headerImage2x = $site->image($site->headerImage2x())->url();
?>
<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<?php snippet('html_header') ?>
<body>
	<div class="wrapper">
	<?php snippet('menu'); ?>

	<header class="hero">
		<div class="container">
			<img class="device" src="<?= $headerImage1x ?>" srcset="<?= $headerImage1x ?> 1x, <?= $headerImage2x ?> 2x">
		</div>
	</header>

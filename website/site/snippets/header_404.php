<?
	$headerImage1x = $site->image($site->header404Image1x())->url();
	$headerImage2x = $site->image($site->header404Image2x())->url();
?>
<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<? snippet('html_header') ?>
<body>
	<div class="wrapper">
	<? snippet('menu'); ?>

	<header class="error">
		<div class="container">
			<img class="device" src="<?= $headerImage1x ?>" srcset="<?= $headerImage1x ?> 1x, <?= $headerImage2x ?> 2x">
		</div>
	</header>

<?php
$headerImage1x = '';
$headerImage2x = '';
$headerClass = '';

switch($context) {
	case 'default' :
		$headerClass = 'hero';
		$headerImage1x = $site->image($site->headerImage1x())->url();
		$headerImage2x = $site->image($site->headerImage2x())->url();
		break;

	case 'blog' :
		$headerClass = 'blog';
		$headerImage1x = $site->image($site->headerBlogImage1x())->url();
		$headerImage2x = $site->image($site->headerBlogImage2x())->url();
		break;

	case 'error' :
		$headerClass = 'error';
		$headerImage1x = $site->image($site->header404Image1x())->url();
		$headerImage2x = $site->image($site->header404Image2x())->url();
		break;
}

?>



<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<?php snippet('html_header') ?>
<body>
	<div class="wrapper">
	<?php snippet('menu'); ?>

	<header class="<?= $headerClass ?>">
		<div class="container">
			<img class="device" src="<?= $headerImage1x ?>" srcset="<?= $headerImage1x ?> 1x, <?= $headerImage2x ?> 2x">
		</div>
	</header>

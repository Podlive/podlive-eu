<?php snippet('header_404') ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="column full error">
					<h1><?= $page->title()->html() ?></h1>
					<?= $page->text()->kirbytext() ?>
				</div>
			</div>
		</div>
	</section>

<?php snippet('footer') ?>

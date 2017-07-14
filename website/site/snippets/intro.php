<section class="intro">
	<div class="container">
		<div class="row clearfix">
			<div class="column full">
				<h1><?= $site->title()->text() ?></h1>
				<? if($site->slogan()): ?>
					<h3><?= $site->slogan()->text() ?></h3>
				<? endif ?>
				<?
					echo $section->text()->kirbytext();
					echo snippet("appstore-buttons");
				?>
			</div>
		</div>
	</div>
</section>

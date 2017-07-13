<?php if($pagination->hasPages()): ?>
	<section class="pagination">
		<div class="container">
			<?php if($pagination->hasPrevPage()): ?>
			<a class="pagination-item left" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles">← newer articles</a>
			<?php endif ?>

			<?php if($pagination->hasNextPage()): ?>
			<a class="pagination-item right" href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles">older articles →</a>
			<?php endif ?>
		</div>
	</section>
<?php endif ?>

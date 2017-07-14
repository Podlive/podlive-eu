<? if($pagination->hasPages()): ?>
	<section class="pagination">
		<div class="container">
			<? if($pagination->hasPrevPage()): ?>
			<a class="pagination-item left" href="<?= $pagination->prevPageURL() ?>" rel="prev" title="newer articles"><?= $page->paginationNewerText() ?></a>
			<? endif ?>

			<? if($pagination->hasNextPage()): ?>
			<a class="pagination-item right" href="<?= $pagination->nextPageURL() ?>" rel="next" title="older articles"><?= $page->paginationOlderText() ?></a>
			<? endif ?>
		</div>
	</section>
<? endif ?>

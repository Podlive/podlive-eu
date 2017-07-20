	<nav class="top">
		<? foreach($pages->visible() as $thePage): ?>
			<? if($thePage->isMenuItem()->bool()): ?>
				<div class="menuitem"><a href="<?= $thePage->url() ?>"><?= $thePage->menuTitle()->text() ?></a></div>
			<? endif ?>
		<? endforeach ?>
		<ul>
		<? foreach($site->languages() as $language): ?>
			<li<?php e($site->language() == $language, ' class="active"') ?>>
				<a href="<?= $page->url($language->code()) ?>" class="language <?= $language->code() ?>"></a>
			</li>
		<?php endforeach ?>
		</ul>
	</nav>

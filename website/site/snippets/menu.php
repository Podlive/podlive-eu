	<nav class="top">
		<?php foreach($pages->visible() as $page): ?>
		<?php if($page->isMenuItem()->bool()): ?>
		<div class="menuitem"><a href="<?= $page->url() ?>"><?= $page->menuTitle()->text() ?></a></div>
		<?php endif ?>
		<?php endforeach ?>
		<ul>
			<?php foreach($site->languages() as $language): ?>
			<li<?php e($site->language() == $language, ' class="active"') ?>>
			<a href="<?= $language->url() ?>" class="language <?= $language->code() ?>"></a>
			</li>
			<?php endforeach ?>
		</ul>
	</nav>

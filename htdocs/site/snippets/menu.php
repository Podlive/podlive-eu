	<nav class="top">
		<?php foreach($pages->visible() as $thePage): ?>
			<?php if($thePage->isMenuItem()->bool()): ?>
				<div class="menuitem"><a href="<?= $thePage->url() ?>"><?= $thePage->menuTitle()->text() ?></a></div>
			<?php endif ?>
		<?php endforeach ?>
		<ul>
		<?php foreach($site->languages() as $language): ?>
			<li<?php e($site->language() == $language, ' class="active"') ?>>
				<a href="<?= $page->url($language->code()) ?>" class="language <?= $language->code() ?>"></a>
			</li>
		<?php endforeach ?>
		</ul>
	</nav>

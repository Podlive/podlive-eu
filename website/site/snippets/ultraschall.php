<?php
	$image1x = page($section->uid())->image($section->image1x());
	$image2x = page($section->uid())->image($section->image2x());
?>
        <section id="ultraschall" class="content gradient">
            <div class="container">
                <div class="row clearfix">
                	<div class="column full">
                        <div class="product center">
                            <img class="background" src="<?= $image1x->url() ?>" srcset="<?= $image1x->url() ?> 1x, <?= $image2x->url() ?> 2x">
                        </div>
                	</div>

                    <div class="column full">
                        <h2><?= $section->title()->text() ?></h2>
                        <?= $section->text()->kirbytext() ?>

                        <div class="column center">
                            <a href="<?= $section->ultraschall_url()->text() ?>" class="button"><?= $section->ultraschall_url_label()->text() ?></a>
                            <a href="<?= $section->studiolink_url()->text() ?>" class="button"><?= $section->studiolink_url_label()->text() ?></a>
                            <a href="<?= $section->studiolink_tutorial_url()->text() ?>" class="button button-long"><?= $section->studiolink_tutorial_url_label()->text() ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

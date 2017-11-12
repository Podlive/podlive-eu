<?
	$image1x = page($section->uid())->image($section->image1x());
	$image2x = page($section->uid())->image($section->image2x());
?>
        <section id="podlive-ipad" class="content gradient">
            <div class="container">
                <div class="row clearfix">
                    <div class="column half flow-opposite">
                        <div class="product">
                            <img class="background" src="<?= $image1x->url() ?>" srcset="<?= $image1x->url() ?> 1x, <?= $image2x->url() ?> 2x">
                        </div>
                    </div>
                    <div class="column half">
                        <h2><?= $section->title()->text() ?></h2>
                        <?= $section->text()->kirbytext() ?>
                    </div>
                </div>
            </div>
        </section>

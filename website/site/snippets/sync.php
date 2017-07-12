
        <section id="sync" class="content gradient">
            <div class="container">
                <div class="row clearfix">
                    <div class="column full">
                        <h2><?= $section->title()->text() ?></h2>
                        <?= $section->text()->kirbytext() ?>
                    </div>

				<?
					echo snippet("appstore-buttons");
				?>
                </div>
            </div>
        </section>

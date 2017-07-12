
        <section id="features" class="content gradient">
            <div class="container">
                <div class="row clearfix">
                    <div class="column full">
                        <h2><?= $section->title()->text() ?></h2>
                        <?= $section->text()->kirbytext() ?>
                    </div>
                </div>

                <div class="row clearfix features">
<?php

foreach($section->children()->visible() as $feature) {
  snippet('feature', array('feature' => $feature));
}

?>                </div>
            </div>
        </section>

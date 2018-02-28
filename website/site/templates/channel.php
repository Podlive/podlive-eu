
<?php snippet('header', array('context' => 'channel')) ?>

<?php
$name           = trim($channel->get("name"));
$followerCount  = $channel->get("followerCount");
$coverArtUrl    = $channel->get("coverartThumbnail200")->getURL();
$websiteUrl     = $channel->get("websiteUrl");
$description    = $channel->get("description");

$followerLabel = "";
if($followerCount == 1) {
    $followerLabel = $page->followerCountTextSingular()->text();
} else {
    $followerLabel = $page->followerCountTextPlural()->text();
}

?>


<section id="article">
    <div class="container blog">
        <article>
            <header class="article-header">
                <h1 class="article-title"> </h1>
            </header>
            <div class="row clearfix">
                <div class="column half">
                    <img class="channel-logo" src="<?= $coverArtUrl ?>">
                </div>
                <div class="column half">
                    <h2><?= $name ?></h2>
                    <p><?= $description ?></p>
                    <p><?= $followerCount.' '.$followerLabel ?></p>
                    <p><a href="<?= $websiteUrl ?>">Webseite</a></p>
                </div>
            </div>
        </article>
    </div>
</section>

<?php snippet('footer') ?>

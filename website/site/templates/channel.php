
<?php snippet('header', array('context' => 'channel', 'channel' => $channel)) ?>

<?php
$name           = trim($channel->get("name"));
$followerCount  = $channel->get("followerCount");
$listenerCount  = $channel->get("listenerCount");
$coverArtUrl    = $channel->get("coverartThumbnail200")->getURL();
$websiteUrl     = $channel->get("websiteUrl");
$channelState   = $channel->get("state");
$isOnline       = ($channelState != "offline");

$followerLabel = "";
$listenerLabel = "";

if($listenerCount == 1) {
    $followerLabel = $page->followerCountTextSingular()->text();
    $listenerLabel = $page->listenerCountTextSingular()->text();
}
else {
    $followerLabel = $page->followerCountTextPlural()->text();
    $listenerLabel = $page->listenerCountTextPlural()->text();
}

?>

<section class="article">
	<div class="container blog">
        <article>
            <header class="article-header">
                <h1 class="article-title"><?= $page->title()->html() ?></h1>
            </header>

            <img class="channel-logo" src="<?= $coverArtUrl ?>">
        </article>

	</div>
</section>

<?php snippet('footer') ?>


<?php snippet('header', array('context' => 'channel')) ?>

<?php
$name           = trim($channel->get("name"));
$followerCount  = $channel->get("followerCount");
$coverArtUrl    = $channel->get("coverartThumbnail200")->getURL();
$websiteUrl     = $channel->get("websiteUrl");
$description    = $channel->get("description");
$twitterUsername= $channel->get("twitterUsername");
$chatUrl        = $channel->get("chatUrl");
$creator        = $channel->get("creator");

$followerLabel = "";
if($followerCount == 1) {
    $followerLabel = $page->followerCountTextSingular()->text();
} else {
    $followerLabel = $page->followerCountTextPlural()->text();
}

?>

<section id="channel" class="content gradient">
    <div class="container">
        <div class="row clearfix">
            <div class="column full>"> 
                <img class="channel-logo" src="<?= $coverArtUrl ?>">
                <p></p>
                <h2><?= $name ?></h2>
                <p><?= $followerCount.' '.$followerLabel ?></p>
                <p><?= $description ?></p>
                <p><?= $creator ?></p>
                <p>
                    <a href="<?= $websiteUrl ?>">Webseite</a>, 
                    <a href="https://twitter.com/<?= $twitterUsername ?>">Twitter</a>, 
                    <a href="<?= $chatUrl ?>">Chat</a>
                </p>
                
            </div>
        </div>
    </div>
</section>

<?php snippet('footer') ?>

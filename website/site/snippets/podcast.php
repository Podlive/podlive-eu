<?php
$name 			= trim($channel->get("name"));
$followerCount 	= $channel->get("followerCount");
$listenerCount 	= $channel->get("listenerCount");
$coverArtUrl 	= $channel->get("coverartThumbnail200")->getURL();
$websiteUrl		= $channel->get("websiteUrl");
$channelState	= $channel->get("state");
$isOnline 		= ($channelState != "offline");

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
	<li class="top-channel">
        <?php if($isOnline): ?>
        <div class="onair"><?= $channelState ?></div>
		<?php endif ?>

		<?php if($websiteUrl): ?>
			<a href="<?= $websiteUrl ?>" title="<?= $name ?> Website"><img class="channel-logo" src="<?= $coverArtUrl ?>"></a>
		<?php else: ?>
			<img class="channel-logo" src="<?= $coverArtUrl ?>">
		<?php endif ?>

		<div class="column center channel-logo-name"><strong><?= $name ?></strong>
		<?php if($showFollowerCount): ?>
			<?php if($isOnline): ?>
				<div class="follower-count"><?= $listenerCount.' '.$listenerLabel ?></div></div>
			<?php else: ?>
				<div class="follower-count"><?= $followerCount.' '.$followerLabel ?></div></div>
			<?php endif ?>
		<?php endif ?>
	</li>

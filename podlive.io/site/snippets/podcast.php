<?php
$name 			= trim($channel->get("name"));
$followerCount 	= $channel->get("followerCount");
$listenerCount 	= $channel->get("listenerCount");
$coverArtUrl 	= $channel->get("coverartThumbnail200")->getURL();
$channelState	= $channel->get("state");
$isOnline 		= ($channelState != "offline");
$channelId		= $channel->getObjectId();

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

		<a href="<?= 'channel/'.$channelId ?>" title="<?= $name ?>">
			<img class="channel-logo" src="<?= $coverArtUrl ?>">
		</a>

		<div class="column center channel-logo-name"><strong><?= $name ?></strong>
		<?php if($showFollowerCount): ?>
			<?php if($isOnline): ?>
				<div class="follower-count"><?= $listenerCount.' '.$listenerLabel ?></div></div>
			<?php else: ?>
				<div class="follower-count"><?= $followerCount.' '.$followerLabel ?></div></div>
			<?php endif ?>
		<?php endif ?>
	</li>

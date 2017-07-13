<?php
$name 			= trim($channel->get("name"));
$followerCount 	= $channel->get("followerCount");
$coverArtUrl 	= $channel->get("coverartThumbnail200")->getURL();
$websiteUrl		= $channel->get("websiteUrl");
$channelState	= $channel->get("state");
$isOnline 		= ($channelState != "offline");
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
		<br><div class="follower-count"><?= $followerCount ?> Follower</div></div>
		<?php endif ?>
	</li>

<?php
$name 			= trim($channel->get("name"));
$followerCount 	= $channel->get("followerCount");
$coverArtUrl 	= $channel->get("coverartThumbnail200")->getURL();
$websiteUrl		= $channel->get("websiteUrl");
$channelState	= $channel->get("state");
$isOnline 		= ($channelState != "offline");

?>
	<li class="top-channel">
		<img class="channel-logo" src="<?= $coverArtUrl ?>">
		<div class="column center channel-logo-name"><strong><?= $name ?></strong>
		<?php if($showFollowerCount): ?>
		<br><div class="follower-count"><?= $followerCount ?> Follower</div></div>
		<?php endif ?>
	</li>

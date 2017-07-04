<?
require_once 'config/config.php';
require_once 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseConfig;

// Parse Init
ParseClient::initialize($app_id, $rest_key, $master_key);
ParseClient::setServerURL($restServerUrl,'parse');


$parseConfig = new ParseConfig();
$showFollowerCount = $parseConfig->get("topWebsiteChannelsFollowerCount");


// Fire a query
$query = new ParseQuery("Channel");
$query->equalTo(@"isEnabled", true);
$query->descending("followerCount");
$query->addAscending("name");
$query->limit(TOP_WEBSITE_CHANNELS_COUNT);


// get queried channels
$channels = $query->find();


// Generate output
$numberOfChannels = count($channels);
for ($idx = 0; $idx < $numberOfChannels; $idx++) {
    if($idx == 0) {
		echo '
				<div class="row clearfix">';
	}

	$theChannel 	= $channels[$idx];
	$name 			= trim($theChannel->get("name"));
	$followerCount 	= $theChannel->get("followerCount");
	$coverArtUrl 	= $theChannel->get("coverartThumbnail200")->getURL();
	$websiteUrl		= $theChannel->get("websiteUrl");

	$imageTag = "";
	if($websiteUrl) {
		$imageTag = '<a href="'.$websiteUrl.'" target="_blank"><img class="channel-logo" src="'.$coverArtUrl.'"></a>';
	}
	else {
		$imageTag = '<img class="channel-logo" src="'.$coverArtUrl.'">';
	}

	$FollowerCountTag = "";
	if($showFollowerCount) {
		$FollowerCountTag = '<br /><div class="follower-count">'.$followerCount.' Follower</div>';
	}

	echo '
					<div class="column fifth">
						'.$imageTag.'
						<div class="column center channel-logo-name"><strong>'.$name.'</strong>
						'.$FollowerCountTag.'</div>
					</div>';

	if($idx < $numberOfChannels-1) {
		if(($idx+1) % 5 == 0) {
			echo '
				</div>

				<div class="row clearfix">';
		}
	}
	else {
			echo '
				</div>';
	}
}


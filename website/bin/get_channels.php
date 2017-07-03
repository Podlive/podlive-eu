<?
require_once 'config/config.php';
require_once 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseQuery;

// Parse Init
ParseClient::initialize( $app_id, $rest_key, $master_key );
ParseClient::setServerURL('https://parse-server.podlive.io','parse');


// Fire a query
$query = new ParseQuery("Channel");
$query->addDescending("followerCount");
$query->addAscending("name");
$query->limit(15);


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
	$name 			= $theChannel->get("name");
	$followerCount 	= $theChannel->get("followerCount");
	$coverArtUrl 	= $theChannel->get("coverartThumbnail800")->getURL();
	$websiteUrl		= $theChannel->get("websiteUrl");

	$imageTag = "";
	if($websiteUrl) {
		$imageTag = '<a href="'.$websiteUrl.'" target="_blank"><img class="channel-logo" src="'.$coverArtUrl.'"></a>';
	}
	else {
		$imageTag = '<img class="channel-logo" src="'.$coverArtUrl.'">';
	}

	echo '
					<div class="column fifth">
						'.$imageTag.'
						<div class="column center channel-logo-name"><strong>'.$name.'</strong></div>
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

<?php
use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseConfig;

// Parse Init
$parseTarget = c::get('parseTarget');
$parse = c::get('parse')[$parseTarget];

ParseClient::initialize( $parse['appID'], $parse['restKey'], $parse['masterKey'] );
ParseClient::setServerURL($parse['restServerUrl'], 'parse');


// Fire a query
$query = new ParseQuery("Channel");
$query->equalTo("isEnabled", true)
	  ->descending("followerCount")
	  ->addAscending("name");

$parseConfig = new ParseConfig();
$query->limit($parseConfig->get("topWebsiteChannels"));

// get queried channels
$channels = $query->find();

// are we allowed to show top channels?
$canShowTopChannels = $parseConfig->get("showTopWebsiteChannels");
?>

<? if ($canShowTopChannels): ?>
        <section id="podcasts" class="content gradient">
            <div class="container">
                <div class="row clearfix">
                    <div class="column full">
                    	<? if($section->title()): ?>
                        <h2><?= $section->title()->text() ?></h2>
                        <? endif ?>

                        <?
                        	if($section->text()) {
                        		echo $section->text()->kirbytext();
                        	}
                        ?>
                    </div>
                </div>

				<ul class="top-channels">
				<?
					foreach($channels as $channel) {
						snippet('podcast', array(
							'page' => $section,
							'channel' => $channel,
                            'showFollowerCount' => $parseConfig->get("topWebsiteChannelsFollowerCount"),
                            'canPlayLiveChannels' => $parseConfig->get("canPlayLiveChannels"),
						));
					}
				?>
				</ul>

            </div>
        </section>
<? endif ?>

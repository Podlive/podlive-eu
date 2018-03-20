<?php
use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseConfig;

// Parse Init
$parseTarget = c::get('parseTarget');
$parse = c::get('parse')[$parseTarget];

ParseClient::initialize( $parse['appID'], $parse['restKey']);
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

<?php if ($canShowTopChannels): ?>
        <section id="podcasts" class="content gradient">
            <div class="container">
                <div class="row clearfix">
                    <div class="column full">
                    	<?php if($section->title()): ?>
                        <h2><?= $section->title()->text() ?></h2>
                        <?php endif ?>

                        <?php
                        	if($section->text()) {
                        		echo $section->text()->kirbytext();
                        	}
                        ?>
                    </div>
                </div>

				<ul class="top-channels">
				<?php
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
<?php endif ?>

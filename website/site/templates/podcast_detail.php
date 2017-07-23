<?php
if(!isset($_REQUEST["pid"])) {
	header('Location: /');
	exit;
}

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
$query->equalTo(@"objectId", $_REQUEST["pid"]);
$result = $query->find();


// no channel with give objectId found
if(count($result) == 0) {
	header('Location: /');
	exit;
}

$channel = $result[0];
// dump($channel->coverartThumbnail200->getUrl());
// exit;

?>
<? snippet('header', array('context' => 'podcast', 'channel' => $channel)) ?>

	<section class="article">
		<div class="container blog">
            <article>
                <header class="article-header">
                    <h1 class="article-title"><?= $page->title()->html() ?></h1>
                </header>

                <div class="text">
					<? snippet('coverimage', $page) ?>
                    <?= $page->text()->kirbytext() ?>
                </div>
            </article>

		</div>
	</section>

<? snippet('footer') ?>

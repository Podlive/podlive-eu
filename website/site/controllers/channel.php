<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

use Parse\ParseClient;
use Parse\ParseQuery;
use Parse\ParseConfig;

return function($site, $pages, $page, $args) {

	// get channel id from url path
	$channelId = $args['channelId'];

	// Parse Init
	$parseTarget = c::get('parseTarget');
	$parse = c::get('parse')[$parseTarget];

	ParseClient::initialize( $parse['appID'], $parse['restKey'], $parse['masterKey'] );
	ParseClient::setServerURL($parse['restServerUrl'], 'parse');

	// Fire a query
	$query = new ParseQuery("Channel");
	$query->equalTo(@"objectId", $channelId);
	$result = $query->find();

	if (!isset($result[0])) {
		// redirect to error page
		go('/');
	}
	$channel = $result[0];

	// return vars to use in template
	return [
		'channel' => $channel
	];

};

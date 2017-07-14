<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PERSONAL-686a4fd2727400666366fb319392659a');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug', true);					// Enables/disables PHP errors
c::set('markdown.extra', true);			// Enables/disables the Markdown extra parser with additional Markdown features like footnotes and tables.


// https://getkirby.com/docs/languages/setup
c::set('languages', array(
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'locale'  => 'de_DE',
    'url'     => '/',
    'default' => true,
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
));
c::set('language.detect', true);
c::set('date.handler', 'strftime');



// Parse Configuration
c::set('parse', array(
	'staging' => array(
		'appID'			=> 'iePaewo3chah2cis0ophei9moosh5ief7ooviereithiemaech',
		'restKey'		=> 'theehahsh7aeth4Bae8edairav0thoovei3uxadahvahree0Ih',
		'masterKey'		=> 'Eipei2ieY7tuo1ooFauNooBaiheivie5xieveesh4iezahchuw',
		'restServerUrl'	=> 'https://podlive-parse-server-test.herokuapp.com',
	),
	'production' => array(
		'appID'			=> 'ni2aeFaed4goo3feis2doo7vegeoy5iJaip0Aexech5Iegahp1',
		'restKey'		=> 'AiRae4aC0za4beedoo9naiTh7Ohph2uafu4ok4photaib8iev3',
		'masterKey'		=> 'zie4gieQuuuh6ahshooloh8fukie0apha2muz2keiwei2ijaht',
		'restServerUrl'	=> 'https://parse-server.podlive.io',
	),
));
c::set('parseTarget', 'production');

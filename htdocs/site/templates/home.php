<?php

snippet('header', array('context' => 'default'));


// create a page in kirby webinterface
foreach($pages->visible() as $section) {
	// disable to make it visible as a menu item to use predefined snippets like for iphone
	if(!$section->isMenuItem()->bool()) {
		// set the page url in kirby webinterface to match the snippet name
		snippet($section->uid(), array('section' => $section));
	}
}

snippet('footer');

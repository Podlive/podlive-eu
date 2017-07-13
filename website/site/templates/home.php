<?php

snippet('header');

foreach($pages->visible() as $section) {
	if(!$section->isMenuItem()->bool()) {
		snippet($section->uid(), array('section' => $section));
	}
}

snippet('footer');

?>

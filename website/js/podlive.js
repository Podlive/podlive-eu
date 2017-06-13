function comingSoon(lang) {
	switch(lang) {
		case 'de':
		    swal("Wir testen...", "Momentan befinden wir uns in der Beta-Testphase.\nPodlive wird bald im App Store verfügbar sein.\n\nBitte hab noch ein bisschen Geduld. ☺️");
		    break;

		case 'en':
		    swal("We are testing...", "Currently wer are in beta-test.\nPodlive will be available on the App Store soon.\n\nPlease be patient. ☺️");
		    break;
	}
}

(function($) {
    $.fn.goTo = function() {
        $('html, body').animate({
            scrollTop: $(this).offset().top + 'px'
        }, 'slow');
        return this; // for chaining...
    };
})(jQuery);

MAIN = (function ($) {

	init = function () {
		// Code here runs straight away

		$(DOMready);

	},

	DOMready = function () {
		// Code here runs when the DOM is ready
		imager();
		ajaxForms();
		$('#contact').length ? maps() : console.warn('sorry, google maps no exist here');

	};

	imager = function() {
		new Imager('.js-load-img', {
			//availableWidths: [360, 480, 600, 800, 1024],
			lazyload: true
		});
	};

	ajaxForms = function() {

		//signup
		$('#signup-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			show_alert: true,
			form_success: function() { /*callback here*/ },
			form_failure: function() { /*callback here*/ }
		});

		//contact
		$('#contact-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			show_alert: true,
			form_success: function() { /*callback here*/ },
			form_failure: function() { /*callback here*/ }
		});

		//booking
		$('#booking-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			show_alert: true,
			form_success: function() { /*callback here*/ },
			form_failure: function() { /*callback here*/ }
		});

	};

	maps = function() {

		var latlng = new google.maps.LatLng(51.4926406357673, -0.14077541993339);
		var myOptions = {
			zoom: 14,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("google-map"),
				myOptions);

		var image = new google.maps.MarkerImage('/assets/img/map-icon.png',
			// This marker is 20 pixels wide by 32 pixels tall.
			new google.maps.Size(40, 57),
			// The origin for this image is 0,0.
			new google.maps.Point(0, 0),
			// The anchor for this image is the base of the flagpole at 0,32.
			new google.maps.Point(20, 56));

		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			icon: image
		});

	}

	return {
		start : init
	};

})(jQuery);

MAIN.start();
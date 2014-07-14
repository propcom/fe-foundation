MAIN = (function ($) {	

	init = function () {
		// Code here runs straight away

		$(DOMready);

		var mapObject = document.getElementById("google-map");

		if (mapObject) {

			function loadScript() {
			  var script = document.createElement('script');
			  script.type = 'text/javascript';
			  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +'callback=maps';
			  document.body.appendChild(script);
			}

			window.onload = loadScript;

		}

	},

	DOMready = function () {

		// Code here runs when the DOM is ready
		imager();
		ajaxForms();

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
		});

		//contact
		$('#contact-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			form_success: function() { /*callback here*/ },
			form_failure: function() { /*callback here*/ }
		});

		//booking
		$('#booking-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			form_before_send: function() { 
				$('#reservation-date-year').removeAttr('disabled');
			}
		});

	};

	maps = function() {

		var lat = $('.map').data('lat');
		var lng = $('.map').data('lng');	

		var latlng = new google.maps.LatLng(lat, lng);
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
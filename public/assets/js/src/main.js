MAIN = (function ($) {
    $('#reservation-date-month').change(function(){
		var d = new Date();

		var month = d.getMonth()+1;
		var day = d.getDate();
		var year = d.getFullYear();

		$('#reservation-date-day').empty();
    	$('#reservation-date-day').append('<option value="Day">Day</option>');

    	if($(this).val()==month) {
    		var month = $(this).val();
    		var d= new Date(year, month, 0);
    		var days = d.getDate();

    		for (i=1; i<=day-1; i++) {
    			$('#reservation-date-day').append('<option value="' + i + '" disabled=disabled>' + i + '</option>');
    		}
    		for (i=day; i<=days; i++) {
    			$('#reservation-date-day').append('<option value="' + i + '">' + i + '</option>');
    		}
    	} else {
    		var month = $(this).val();
    		var d= new Date(year, month, 0);
    		var days = d.getDate();

    		for (i=1; i<=days; i++) {
    			$('#reservation-date-day').append('<option value="' + i + '">' + i + '</option>');
    		}
    	}
    });

	var lat = '';
	var lng = '';

	init = function () {
		// Code here runs straight away

		$(DOMready);

		var mapObject = document.getElementById("google-map");

		if (mapObject) {

			var article = document.querySelector('#google-map'),
            lat = article.dataset.lat;

			var article2 = document.querySelector('#google-map'),
            lng = article2.dataset.lng;

			function loadScript() {
			  var script = document.createElement('script');
			  script.type = 'text/javascript';
			  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +'callback=initialize';
			  document.body.appendChild(script);
			}

			window.onload = loadScript;

			// window.load = loadScript();
			// maps($('.map').data('lat'), $('.map').data('lng'));

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
			form_success: function() { /*callback here*/ },
			form_failure: function() { /*callback here*/ }
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
			form_success: function() { /*callback here*/ },
			form_failure: function() { /*callback here*/ }
		});

	};

	maps = function(lat, lng) {

		console.log(lat);

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
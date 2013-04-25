/* Author:

 */

function initialize() {
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

jQuery(function($) {
	if ($('#contact').size() > 0) {
		initialize();
	} else {
		var slides = $('div.transition');
		// StrechArmstrong
		slides.stretcharmstrong({
			'rotate': true,
			'rotate_interval': 5000,
			'transition': {
				'type': 'fade',
				'duration': 3000,
				'orientation': 'horizontal'
			},
			'element': 'img',
			'resize': false,
			'background': false,
			'ajax': '/background/images.json?p=' + $('body').attr('id')
		});

	}


	//Twitter Feed
	$('.twitter').cycle({
		fx: 'scrollUp',
		pause: 1,
		fit: 1
	});

	// Gallery & EventsFancyBox
	$('.gallery li a, .events ul li a').fancybox();

	//Forms

	//signup

	$('#signup-form').ajaxform({
		error_location: 'input', // input, label or tooltip
		show_alert: true,
		form_success: function() {
			alert("This is a callback for when the form passes server validation successfully!");
		},
		form_failure: function() {
			alert("This is a callback for when the form fails server validation!");
		}
	});

	$('#contact-form').ajaxform({
		error_location: 'input', // input, label or tooltip
		show_alert: true,
		form_success: function() {
			alert("This is a callback for when the form passes server validation successfully!");
		},
		form_failure: function() {
			alert("This is a callback for when the form fails server validation!");
		}
	});

	$('#booking-form').ajaxform({
		error_location: 'input', // input, label or tooltip
		show_alert: true,
		form_success: function() {
			alert("This is a callback for when the form passes server validation successfully!");
		},
		form_failure: function() {
			alert("This is a callback for when the form fails server validation!");
		}
	});

});
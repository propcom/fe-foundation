
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
	}

	//Forms

		//signup
		$('#signup-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			show_alert: true,
			form_success: function() {
			},
			form_failure: function() {
			}
		});

		//contact
		$('#contact-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			show_alert: true,
			form_success: function() {
			},
			form_failure: function() {
			}
		});

		//booking
		$('#booking-form').ajaxform({
			error_location: 'input', // input, label or tooltip
			show_alert: true,
			form_success: function() {
			},
			form_failure: function() {
			}
		});

});
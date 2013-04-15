// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function f(){ log.history = log.history || []; log.history.push(arguments); if(this.console) { var args = arguments, newarr; args.callee = args.callee.caller; newarr = [].slice.call(args); if (typeof console.log === 'object') log.apply.call(console.log, console, newarr); else console.log.apply(console, newarr);}};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());


// place any jQuery/helper plugins in here, instead of separate, slower script files.

/* Author:

*/

function initialize() {
	var latlng = new google.maps.LatLng(51.4926406357673,-0.14077541993339);
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
	  new google.maps.Point(0,0),
	  // The anchor for this image is the base of the flagpole at 0,32.
	  new google.maps.Point(20, 56));
	  
	var marker = new google.maps.Marker({
	    position: latlng,
	    map: map,
	    icon: image
	});
}

jQuery(function($){
	if ($('#contact').size()>0) {
		initialize();
	};
});

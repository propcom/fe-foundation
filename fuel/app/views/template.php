<?php render("inc/meta"); ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
	<title><?=$title?></title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="description" content="<?=$description?>" />	
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="revisit-after" content="14 days" />
	<meta name="robots" content="all" />
	<meta name="generator" content="http://www.propeller.uk.com" />
	<meta name="author" content="propeller communications" />

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<link rel="stylesheet" href="/assets/css/style.css">

	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

	<!-- All JavaScript at the bottom, except this Modernizr build.
	Modernizr enables HTML5 elements & feature detects for optimal performance.
	Create your own custom Modernizr build: www.modernizr.com/download/ -->
	<script src="/assets/js/libs/modernizr-2.5.0.min.js"></script>
</head>

<body id="<?=$page; ?>">

	<div class="container">
	    <header class="header">
			<h1>Two Day Build</h1>
	    </header>
	     
	    <nav>	
		</nav>

		<section role="main">
			<?= $content ?>
		</section><!-- End of main -->

		<footer>
			<a href="http://www.propcom.co.uk"><img src="/assets/img/siteby.png" alt="Site by Propeller" width="109" height="23" /></a>
		</footer>

	</div> <!-- end of main container -->

	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

	<?php if ($page == "contact"): ?>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<?php endif ?>

	<!-- scripts concatenated and minified via build script -->
	<script src="/assets/js/plugins.js"></script>
	<script src="/assets/js/script.js"></script>
	<!-- end scripts -->


	<!--[if lt IE 7 ]>
	  <script src="/assets/js/libs/dd_belatedpng.js"></script>
	  <script defer="defer">DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
	<![endif]-->

	<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</body>
</html>

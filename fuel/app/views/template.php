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
		<title><?= $title ?></title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="<?= $description ?>" />
		<meta name="keywords" content="<?= $keywords ?>" />
		<meta name="revisit-after" content="14 days" />
		<meta name="robots" content="all" />
		<meta name="generator" content="http://www.propeller.uk.com" />
		<meta name="author" content="propeller communications" />

		<!-- Mobile viewport optimized: h5bp.com/viewport -->
		<!--
		////////////////////////////////////////////////////////////////////////

		UNCOMMENT THE NEXT LINE (viewport declaration) IF BUILDING A RESPONSIVE WEBSITE

		////////////////////////////////////////////////////////////////////////
		-->
		<!--<meta name="viewport" content="width=device-width">-->

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

		<link rel="stylesheet" href="/assets/css/style.css">

		<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

		<!-- All JavaScript at the bottom, except this Modernizr build.
		Modernizr enables HTML5 elements & feature detects for optimal performance.
		Create your own custom Modernizr build: www.modernizr.com/download/ -->
		<script src="/assets/js/vendor/modernizr.custom.js"></script>
		<script src="/assets/js/vendor/conditionizr.min.js"></script>
		<script>
			conditionizr({
				debug: false,
				scriptSrc: '/assets/conditionizr/js/',
				styleSrc: '/assets/conditionizr/css/',
				ieLessThan: {
					active: true,
					version: '8',
					scripts: false,
					styles: false,
					classes: true,
					customScript: "/assets/conditionizr/ie6/warning.js"
				},
				chrome: {scripts: false, styles: false, classes: false, customScript: false},
				safari: {scripts: false, styles: false, classes: false, customScript: false},
				opera: {scripts: false, styles: false, classes: false, customScript: false},
				firefox: {scripts: false, styles: false, classes: false, customScript: false},
				ie10: {scripts: false, styles: false, classes: false, customScript: false},
				ie9: {scripts: false, styles: false, classes: false, customScript: false},
				ie8: {scripts: false, styles: false, classes: false, customScript: false},
				ie7: {scripts: true, styles: true, classes: true, customScript: false},
				retina: {scripts: false, styles: false, classes: false, customScript: false},
				touch: {scripts: false, styles: false, classes: false, customScript: false},
				mac: true,
				win: true,
				x11: true,
				linux: true
			});

		</script>
	</head>

	<body id="<?= $page; ?>">

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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

		<?php if ($page == "contact"): ?>
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<?php endif ?>

		<? IF (Fuel::$env === Fuel::DEVELOPMENT): ?>
			<script src="/assets/js/lib/plugins.js"></script>
			<script src="/assets/js/lib/jquery.cycle.all.js"></script>
			<script src="/assets/js/lib/jquery.mousewheel-3.0.6.pack.js"></script>
			<script src="/assets/js/lib/jquery.fancybox.pack.js"></script>
			<script src="/assets/js/lib/ajax-forms.js"></script>
			<script src="/assets/js/lib/stretcharmstrong.js"></script>
			<script src="/assets/js/src/script.js"></script>

			<? ELSEIF (Fuel::$env === Fuel::TEST): ?>
			<script src="/assets/js/scripts.js"></script>
			<? ELSE: ?>
			<script src="/assets/js/scripts.min.js"></script>
		<? ENDIF; ?>
		<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
		   mathiasbynens.be/notes/async-analytics-snippet -->
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview'<?= ($page == "page-not-found") ? ",'/404/?url=' + document.location.pathname + document.location.search + '&ref=' + document.referrer" : "" ?>]];
			(function(d, t) {
				var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
				g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g, s)
			}(document, 'script'));
		</script>
	</body>
</html>
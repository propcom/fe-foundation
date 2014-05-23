<? render("inc/meta"); ?>
<!doctype html>
<html class="no-js" lang="en">

	<head>

		<meta charset="utf-8">
		<title><?= $title ?></title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="<?= $description ?>" />
		<meta name="keywords" content="<?= $keywords ?>" />
		<meta name="revisit-after" content="14 days" />
		<meta name="robots" content="all" />
		<meta name="generator" content="http://www.propeller.uk.com" />
		<meta name="author" content="Propeller Communications" />
		<link rel="canonical" href="<? $siteurl ?>" />

		<? if ($responsive == 'true') : ?>
			<meta name="viewport" content="width=device-width">
		<? endif  ?>

		<link rel="stylesheet" href="/assets/css/style.css">

		<script src="/assets/js/vendor/modernizr.custom.js"></script>
		<script src="/assets/js/vendor/conditionizr.min.js"></script>

	</head>

	<body id="<?= $page; ?>">

		<div class="page  page--<?= $page; ?>">

			<section>
				<header class="header--main">
					<h1>Welcome</h1>
				</header>
			</section>

			<main role="main">
				<?= $content ?>
			</main>

			<footer role="contentinfo"></footer>
		</div>

		<?/* JavaScript at the bottom for fast page loading  */?>

		<?/* Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline */?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

		<?php if ($page == "contact"): ?>
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<?php endif ?>

		<? IF (Fuel::$env === Fuel::DEVELOPMENT): ?>
			<script src="/assets/js/modules/conditionizr-init.js"></script>
			<script src="/assets/js/modules/forms.js"></script>
			<script src="/assets/js/modules/ajax-forms.js"></script>
			<script src="/assets/js/src/script.js"></script>

		<? ELSEIF (Fuel::$env === Fuel::TEST): ?>
			<script src="/assets/js/scripts.js"></script>
		<? ELSE: ?>
			<script src="/assets/js/scripts.min.js"></script>
		<? ENDIF; ?>

		<script>
			var _ga = [['_setAccount', '<?=$analytics?>'], ['_trackPageview'<?= ($page == "page-not-found") ? ",'/404/?url=' + document.location.pathname + document.location.search + '&ref=' + document.referrer" : "" ?>]];
			(function(d, t) {
				var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
				g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g, s)
			}(document, 'script'));
		</script>

	</body>
</html>
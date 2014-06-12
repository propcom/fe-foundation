<? render("inc/meta"); ?>
<!doctype html>
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <?/* Prefetch DNS for external assets (Twitter widgets, Maps etc). */?>
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//maps.gstatic.com">
    <link rel="dns-prefetch" href="//maps.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">

    <?/* Prerender pages for browser preloading */?>
    <?/*<link rel="prerender" href="/link/to/another/page" />*/?>


    <title><?= $title ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="revisit-after" content="14 days">
    <meta name="robots" content="all">
    <meta name="generator" content="http://www.propeller.uk.com">
    <meta name="author" content="Propeller Communications">

    <link rel="canonical" href="<?= $siteurl ?>">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?= $twitter ?>">
    <meta name="twitter:title" content="<?= $sitename ?>">
    <meta name="twitter:description" content="<?= $title ?>">
    <meta name="twitter:image" content="<?= 'http://'.$siteurl.'/assets/img/social-avatar.jpg' ?>">

    <meta property="og:title" content="<?= $sitename ?>">
    <meta property="og:image" content="<?= 'http://'.$siteurl.'/assets/img/social-avatar.jpg' ?>">
    <meta property="og:site_name" content="<?= $sitename ?>">
    <meta property="og:description" content="<?= $title ?>">

    <?/* If your site is responsive remember to set TRUE in config */?>
    <? if ($responsive) : ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <? endif; ?>


    <link rel="stylesheet" href="/assets/css/main.css">

    <script src="/assets/js/vendor/modernizr.custom.js"></script>

</head>

<body id="<?= $page; ?>" data-page="<?= $page; ?>" itemscope itemtype="http://schema.org/WebPage">

    <div class="page  page--<?= $page; ?>">

        <section>
            <header class="header--main">
                <h1 class="text--upper">Welcome</h1>
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

    <?php if ($page === 'contact'): ?>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <?php endif ?>


    <? IF (Fuel::$env === Fuel::DEVELOPMENT): ?>
    <script src="/assets/js/lib/conditionizr.js"></script>
    <script src="/assets/js/lib/imager.js"></script>

    <script src="/assets/js/objects/ajax-forms.js"></script>

    <script src="/assets/js/modules/conditionizr-init.js"></script>
    <script src="/assets/js/modules/console.log.js"></script>
    <script src="/assets/js/modules/forms.js"></script>

    <script src="/assets/js/src/main.js"></script>

    <? ELSEIF (Fuel::$env === Fuel::TEST): ?>
    <script src="/assets/js/main.js"></script>
    <? ELSE: ?>
    <script src="/assets/js/main.min.js"></script>
    <? ENDIF; ?>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?=$analytics?>', '<?= $siteurl ?>');
        ga('send', 'pageview'<?= ($page == "page-not-found") ? ",'/404/?url=' + document.location.pathname + document.location.search + '&ref=' + document.referrer" : "" ?>);

    </script>

</body>
</html>
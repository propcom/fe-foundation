
	<div class="container  text--centre">

		<div class="row">
			<h3>
				Run sass from the assets Directory
			</h3>

			<pre>sass --watch --sourcemap sass:css</pre>

			<p class="strong mt10">
				<small>the <code>--sourcemap</code> attribute allows you to see what line of what scss file you need in dev tools. Make sure to enable the 'CSS Source Maps' in your dev tool settings.</small>
			</p>
		</div>


		<div class="row">
			<h6 class="text--upper"><strong>Change the favicon... or Dave will kill you!</strong></h6>
		</div>

		<div class="row">
			<h3>What's installed:</h3>
			<ul>
				<li>SASS</li>
				<li>Normalise</li>
				<li>Condtionizr</li>
				<li>Modernizr</li>
				<li><strong>Imager<br /><em>(see markup for implementation)</em></strong></li>
			</ul>
		</div>


		<div class="row">
			<h3>
				Looking for some front end inspiration? The below will get you started...
			</h3>
			<ul>
				<li>
					<a href="http://smacss.com/book/" target="_blank">SMACSS</a>
				</li>
				<li>
					<a href="http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/" target="_blank">BEM</a>
				</li>
				<li>
					<a href="http://sass-lang.com/guide" target="_blank">SASS</a>
				</li>
			</ul>
		</div>

		<div class="row">
			<h6 class="text--upper">
				<strong>
					Don't forget to define your global variables in fuel/app/config/site.php!
				</strong>
			</h6>
			<ul>
				<li>
					site_email: <strong><?=$site_email?></strong>
				</li>
				<li>
					siteurl: <strong><?=$siteurl?></strong>
				</li>
				<li>
					phone: <strong><?=$phone?></strong>
				</li>
				<li>
					analytics: <strong><?=$analytics?></strong>
				</li>
				<li>
					siteid: <strong><?=$siteid?></strong>
				</li>
				<li>
					sitename: <strong><?=$sitename?></strong>
				</li>
				<li>
					twitter: <strong><?=$twitter?></strong>
				</li>
				<li>
					responsive: <strong><?=$responsive?></strong>
				</li>
			</ul>
		</div>

		<?/*
			ImagerJS Markup to add in place of your <img /> tags
			- see http://bit.ly/1jKBi2H for implementation docs
			- see main.js for instantiation
		*/?>
		<?/*

		<div class="js-load-img" data-width="300" data-height="300" data-src="/assets/img/your-image.jpg" data-alt="Your ALT Attribute" data-class="scale-with-grid"></div>
		<noscript><img src="/assets/img/your-image.jpg" height="300" width="300" alt="Your ALT Attribute" class="scale-with-grid"></noscript>

		*/?>

	</div>


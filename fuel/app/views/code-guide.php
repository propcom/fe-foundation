<div class="container sg-container">

	<div class="twelve columns">
		<h1>------------------------------------------------------</h1>
		<h2>Twitter Feed</h2>
		<div class='twitter-feed'>
			<?php @include("inc/twitter.php"); ?>
		</div>
		<div>
			<code>
				Step 1: Open fuel\app\views\inc\twitter.php and change the user name - line 2<br/>
				Step 2: include the file in your template or view using " @include("inc/twitter.php"); "<br/>
				Step 3: Style the Unordered list with the class twitter on httpdocs\assets\sass\modules\_twitter-feed.scss<br/>
				<a class='go-fancybox' href='#twitter-code'>I'm Feeling Lazy</a>

			</code>
		</div>
		<div class="hidden-code" id="twitter-code">
			<code>
				&lt;div class='twitter-feed'&gt;<br/>
				&lt;?php @include("inc/twitter.php"); ?&gt;<br/>
				&lt;/div&gt;

			</code>
			<h3>................................................</h3>
			<code>
				Styles: httpdocs\assets\sass\modules\_twitter-feed.scss<br/>
			</code>
		</div>
		<h1>------------------------------------------------------</h1>
		<h2>Menus</h2>

		<h3>Menu1</h3>
		<div>
			<?php
			$siteId = 990;
			$menuId = 8185;
			@include '/var/www/shared/menuincludes/menu.php';
			?>
		</div>
		<h3>................................................</h3>
		<h3>Menu2 - use this if you're setting up a menu accordion</h3>
		<div>
			<?php
			$menuId = 8186;
			@include '/var/www/shared/menuincludes/menu.php';
			?>
		</div>
		<code>
			Styles: httpdocs\assets\sass\modules\_menu.scss<br/>
			<a class='go-fancybox' href='#menu-code'>I'm Feeling Lazy</a>
		</code>
		<div class="hidden-code" id="menu-code">
			<p>Menu</p>
			<code>
				&lt;?php<br/>
				$siteId = /*[site id]*/;<br/>
				$menuId = /*[menu id]*/;<br/>
				@include '/var/www/shared/menuincludes/menu.php';<br/>
				?&gt;<br/>
			</code>
			<h3>................................................</h3>
			<p>to add extra menus just use this</p>
			<code>
				&lt;?php<br/>
				$menuId = /*[menu id]*/;<br/>
				@include '/var/www/shared/menuincludes/menu.php';<br/>
				?&gt;<br/>
			</code>
			<h3>................................................</h3>
			<code>
				Styles: httpdocs\assets\sass\modules\_menu.scss<br/>
			</code>
		</div>
		<h1>------------------------------------------------------</h1>
		<h2>Gallery</h2>


		<div style="float:left">
			<h3>Normal Gallery</h3>
			<?php
			@include '/var/www/shared/galleryincludes/galleryv2.php';
			$gallery = new Gallery(true, 961, false, null, 5, false);
			$gallery->getDropDownSelector();
			$gallery->displayError();
			$gallery->getGalleryList();
			?>
		</div>
		<div style="float:right">
			<h3>Individual Galleries (pulled individually)</h3>
			<?php
			$showDropdown = false;
			$siteId = 961;
			?>

			<div style="float:left">
				<h4>Gallery1</h4>
				<?php
				$galleryId = 4407;
				@include '/var/www/shared/galleryincludes/gallery.php';
				?>
			</div>

			<div style="float:left">
				<h4>Gallery2</h4>
				<?php
				$galleryId = 4277;
				@include '/var/www/shared/galleryincludes/gallery.php';
				?>
			</div>
		</div>
		<br style='clear:both;'/>
		<code >
			Step 1: check the code on this file, you'll be able to see the 2 ways to include galleries<br/>
			Step 2: style the gallery on httpdocs\assets\sass\modules\_gallery.scss<br/>
			<a class='go-fancybox' href='#gallery-code'>I'm Feeling Lazy</a>
		</code>
		<div class="hidden-code" id="gallery-code">
			<p>Normal gallery</p>
			<code>
				&lt;?php<br/>
				@include '/var/www/shared/galleryincludes/galleryv2.php';<br/>
				$gallery = new Gallery(true, /*[site id]*/, false, null, /*[nr of pics]*/, false);<br/>
				$gallery->getDropDownSelector();<br/>
				$gallery->displayError();<br/>
				$gallery->getGalleryList();<br/>
				?&gt;
			</code>
			<h3>................................................</h3>
			<p>Individual galleries</p>
			<code>
				&lt;?php<br/>
				$siteId = /*[site id]*/;<br/>
				$showDropdown = false;<br/>
				?&gt;<br/>
				&lt;div&gt;<br/>
				&lt;?php<br/>
				$galleryId = /*[gallery id]*/;<br/>
				@include '/var/www/shared/galleryincludes/gallery.php';<br/>
				?&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div&gt;<br/>
				&lt;?php<br/>
				$galleryId = /*[gallery id]*/;<br/>
				@include '/var/www/shared/galleryincludes/gallery.php';<br/>
				?&gt;<br/>
				&lt;/div&gt;
			</code>
			<h3>................................................</h3>
			<code>
				Styles: httpdocs\assets\sass\modules\_gallery.scss<br/>
			</code>
		</div>
		<h1>------------------------------------------------------</h1>
		<h2>Events</h2>
		<?php
		$siteId = 484;
		@include_once '/var/www/shared/calendarincludes/calendar.php';
		?>
		<? $eventsData = getEventsData(array('show' => 'onemonth')); ?>

		<div class='events' style='float: left;'>
			<h4>Default Events</h4>
			<? getCalendarDropdowns($eventsData) ?>
			<ul>
				<? foreach ($eventsData['events'] as $event) { ?>

					<li>

						<?= $event['event_date'] ?> - <a href="#<?= $event['event_id'] ?>" rel="<?= $event['event_id'] ?>"><?= $event['event_name'] ?></a></li>
				<? } ?>
			</ul>
		</div>
		<div class='events'style="float:right; margin-left: 20px;">
			<h4>Paginated Events</h4>
			<a href="<?= $eventsData['prevMonthLink'] ?>">previous</a><span><?= date('F', $eventsData['monthTime']) ?></span><a href="<?= $eventsData['nextMonthLink'] ?>">next</a>
			<ul>
				<? foreach ($eventsData['events'] as $event) { ?>

					<li>

						<?= $event['event_date'] ?> - <a href="#<?= $event['event_id'] ?>" rel="<?= $event['event_id'] ?>"><?= $event['event_name'] ?></a></li>
				<? } ?>
			</ul>

		</div>
		<div class="hidden-events">
			<? foreach ($eventsData['events'] as $event) { ?>

				<div id="<?= $event['event_id'] ?>" rel="single-event">
					<h3><?= $event['event_name'] ?></h3>
					<h4><?= $event['event_date'] ?></h4>
					<p><?= $event['event_desc'] ?></p>
					<? if (isset($event['imageUrl']) && $event['imageUrl'] != '') { ?>
						<img src="<?= $event['imageUrl'] ?>" tile="<?= $event['event_name'] ?>" alt="<?= $event['event_name'] ?>"/>
					<? } ?>
				</div>
			<? } ?>
		</div>
		<br style="clear:both"/>
		<code>
			Style the Events on httpdocs\assets\sass\modules\_events.scss<br/>
			<a class='go-fancybox' href='#events-code'>I'm Feeling Lazy</a>
		</code>
		<div class="hidden-code" id="events-code">
			<p>Default events</p>
			<code>
				&lt;?php<br/>
				$siteId = /*[site id]*/;<br/>
				@include_once '/var/www/shared/calendarincludes/calendar.php';<br/>
				?&gt;<br/><br/>
				&lt;ul&gt;<br/>
				&lt;? foreach ($eventsData['events'] as $event) { ?&gt;<br/>
				&lt;li&gt;<br/>
				&lt;?= $event['event_date'] ?&gt; - &lt;a href="#&lt;?= $event['event_id'] ?&gt;" rel="&lt;?= $event['event_id'] ?&gt;"&gt;&lt;?= $event['event_name'] ?&gt;&lt;/a&gt;<br/>
				&lt;/li&gt;<br/>
				&lt;? } ?&gt;<br/>
				&lt;/ul&gt;<br/>
			</code>
			<h3>................................................</h3>
			<p>Simple paginated events</p>
			<code>
				&lt;?php<br/>
				$siteId = /*[site id]*/;<br/>
				@include_once '/var/www/shared/calendarincludes/calendar.php';<br/>
				?&gt;<br/>
				&lt;? $eventsData = getEventsData(array('show' => 'onemonth')); ?><br/><br/>
				&lt;a href="&lt;?= $eventsData['prevMonthLink'] ?&gt;"&gt;previous&lt;/a&gt;<br/>
				&lt;span&gt;&lt;?= date('F', $eventsData['monthTime']) ?&gt;&lt;/span&gt;
				<br/>&lt;a href="&lt;?= $eventsData['nextMonthLink'] ?&gt;"&gt;next&lt;/a&gt;<br/><br/>
				&lt;ul&gt;<br/>
				&lt;? foreach ($eventsData['events'] as $event) { ?&gt;<br/>
				&lt;li&gt;<br/>
				&lt;?= $event['event_date'] ?&gt; - &lt;a href="#&lt;?= $event['event_id'] ?&gt;" rel="&lt;?= $event['event_id'] ?&gt;"&gt;&lt;?= $event['event_name'] ?&gt;&lt;/a&gt;&lt;/li&gt;<br/>
				&lt;? } ?&gt;<br/>
				&lt;/ul&gt;
			</code>
			<h3>................................................</h3>
			<p>Hidden events shown with fancybox (works with both above)</p>
			<code>
				&lt;div class="hidden-events"&gt;<br/>
				&lt;? foreach ($eventsData['events'] as $event) { ?&gt;<br/>
				&lt;div id="&lt;?= $event['event_id'] ?&gt;" rel="single-event"&gt;<br/>
				&lt;p&gt;&lt;?= $event['event_name'] ?&gt;&lt;/p&gt;<br/>
				&lt;p&gt;&lt;?= $event['event_date'] ?&gt;&lt;/p&gt;<br/>
				&lt;p&gt;&lt;?= $event['event_desc'] ?&gt;&lt;/p&gt;<br/>
				&lt;? if (isset($event['imageUrl']) $event['imageUrl'] != '') { ?&gt;<br/>
				&lt;img src="&lt;?= $event['imageUrl'] ?&gt;" tile="&lt;?= $event['event_name'] ?&gt;" alt="&lt;?= $event['event_name'] ?&gt;"/&gt;<br/>
				&lt;? } ?&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;? } ?&gt;<br/>
				&lt;/div&gt;<br/>
			</code>
			<h3>................................................</h3>
			<code>
				Styles: httpdocs\assets\sass\modules\_events.scss<br/>
			</code>
		</div>
		<h1>------------------------------------------------------</h1>
		<h2>Forms</h2>
		<div style="float:left; width: 300px;">
			<h4>Signup</h4>
			<?php @include("inc/signup-form.php"); ?>
		</div>
		<div style="float:left; width: 300px; margin-left: 20px;">
			<h4>Contact</h4>
			<?php @include("inc/contact-form.php"); ?>
		</div>
		<div style="float:right; width: 300px;">
			<h4>Booking</h4>
			<?php @include("inc/booking-form.php"); ?>
		</div>
		<br style="clear:both">
		<code>
			Step 1: Include one of the files in fuel\app\views\inc\ using "@include"</br>
			Step 2: Get the form behaving as you want on httpdocs\assets\js\src\script.js - Forms section
			Step 2: Style the forms on httpdocs\assets\sass\modules\_forms.scss<br/>
			More information: <a href='https://github.com/propcom/ajaxformsv2' target='_blank'>github</a><br/>
			<a class='go-fancybox' href='#forms-code'>I'm Feeling Lazy</a>
		</code>
		<div class="hidden-code" id="forms-code">
			<p>Signup Form</p>
			<code>
				&lt;?php @include("inc/signup-form.php"); ?&gt;<br/>
			</code>
			<h3>................................................</h3>
			<p>Contact Form</p>
			<code>
				&lt;?php @include("inc/contact-form.php"); ?&gt;<br/>
			</code>
			<h3>................................................</h3>
			<p>Booking Form</p>
			<code>
				&lt;?php @include("inc/booking-form.php"); ?&gt;<br/>
			</code>
			<h3>................................................</h3>
			<code>
				Styles: httpdocs\assets\sass\modules\_forms.scss<br/>
			</code>
		</div>
		<h1>------------------------------------------------------</h1>
		<h2>Image Slider - Strecharmstrong</h2>
		<div class="transition">

		</div>
		<code>
			This uses an ajax request to fetch the image url... <br/>
			It's initialized in the httpdocs\assets\js\src\script.js - if applied to background just set <b>resize</b> and <b>background</b> option to <b>true</b><br/>
			Images fetched from httpdocs\assets\img\transition\[page-name]<br/>
			More information: <a href='https://github.com/propcom/stretcharmstrong' target='_blank'>github</a>
		</code>
	</div>
</div>


</div>

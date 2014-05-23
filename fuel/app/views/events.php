
<div class="container">
	<h2>
		Google Rich Snippets examples
	</h2>

	<?
	// In the header
	$siteId = $siteid;
	require_once "/var/www/shared/calendarincludes/calendar.php";
	$eventsData = getEventsData();
	?>

	<ul>
		<? foreach ($eventsData["events"] as $event) { ?>
		<? // var_dump($event); die; ?>
			<div itemscope itemtype="http://data-vocabulary.org/Event">
				​<a href="<?=Uri::base(false).'?event='.$event["event_id"]?>" itemprop="url"><span itemprop="summary"><?= $event["event_name"] ?></span></a>
				<p>
					<time itemprop="startDate" datetime="<?= $event["event_date"] ?>">
						<?= $event["event_date"] ?>
					</time>
				</p>
				<p itemprop="description">
					<?= $event["event_desc"] ?>
				</p>
				<? if($event["hasImage"]) : ?>
					<img src="<?= $event["imageUrl"] ?>" alt="<?= $event["event_name"] ?>">
				<? else : ?>
					<img src="images/event-placeholder.jpg ?>" alt="<?= $event["event_name"] ?>">
				<? endif ?>
				​<span itemprop="location" itemscope itemtype="http://data-vocabulary.org/​Organization">
					​<span itemprop="name"><?= $sitename ?></span>
					​<span itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
						<span itemprop="street-address">24 High Street</span>, 
						<span itemprop="locality">Wimbledon Village</span>, 
						<span itemprop="region">London</span>
					</span>
				</span>
			</div>
			<hr />
		<? } ?>
	</ul>
</div>

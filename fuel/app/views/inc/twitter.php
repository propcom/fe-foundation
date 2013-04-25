<?php
$SETUP = array('USER' => 'PropellerComms', 'MAXIMUM_ROWS' => 5);
// DEFINES
foreach ($SETUP as $i => $v) {
	if ($i == 'DATE_FORMAT' && $v == '') {
		define("DATE_FORMAT", 'g:m A M jS'); // Default, incase left blank
	} else {
		define("$i", $v);
	}
}


include_once('/var/www/shared/twitterincludes/CacheTwitter.php');
$t = new CacheTwitter(10); // 10 min cache
$twitterAvailable = $t->twitterAvailable();
$userTimeline = $t->userTimeline(USER, MAXIMUM_ROWS);

////////////////////////////////////////////////////////////////////////////////////////////////

if ($twitterAvailable) {
	if ($userTimeline) {
		?>
		<ul class="twitter">
			<?php foreach ($userTimeline as $tweet) { ?>
				<li class="entry">
					<span class="status-body">

						<span class="entry-content"><?= twitter::convertLinks($tweet->text); ?></span>

					</span>
				</li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		<span class="twitter-error">No feed. Twitter is down. Try again later.</span>
		<?php
	}
} else {
	?>
	<span class="twitter-error">Twitter is down. Try again later</span>
	<?php
}


///////////////////////////////////////////////////////////////////////////////////////////////////
?>
<?php
/* Step 1a: Set the name of the form that this code relates to */
$multiFormName = 'contact-form';

/* Leave these 2 lines as they are */
require '/var/www/shared/formincludes/signupFormHeader.php';
$fh = $multiForms[$multiFormName];

/* Step 1b: Set site id */

$siteId = $siteid;

/* Step 2: Set which fields you want to be required */

$forenameRequired = true;
$surnameRequired = false;
$companyRequired = false;
$dobRequired = true;
$dobYearRequired = false;
$emailRequired = false;
$phoneRequired = false;
$addressRequired = false;   // Set to 'postcode' (with quotes) to just make postcode required
$additionalInfoRequired = false;
$cvRequired = false;
$commentsRequired = false;
$reservationDateRequired = false;
$reservationYearRequired = false;
$reservationDepartureRequired = false;
$reservationTimeRequired = false;
$reservationGuestsRequired = false;

$mailingListRequired = false;  // If true, mailing list box *must* be checked for form to validate

/* Step 3: Set whether you want an email sending */

$sendEmail = true;

/* Step 3a: If sending an email, set email subject and from & to addresses */

$email->setSubject($sitename);

$email->setFromEmail($site_email); // Email is sent 'from' this address
$email->setFromName($sitename); // "Friendly" name emails are sent from (usually "<pubname> Website")

$email->addRecipient($site_email);
//$email->addRecipient('ruth.nachum@propcom.co.uk');		// Add a recipient to the email
//$email->addBccRecipient('andy-signups@propcomm.co.uk');	// Add a bcc to the email (remove the // at the start to enable a line)
//$email->addBccRecipient('john@propcomm.co.uk');

/* Step 4: Set whether you want the user adding to the database
 *         If you *are* using the 'Join our mailing list' checkbox, leave set to 'checkbox'
 *         If you want to make an 'opt-out' checkbox, set to 'checkbox-optout'
 * 		   If *not* using the checkbox, set to true if you want the user adding; or set to false if not
 */

$addToDatabase = false;

/* Step 4a: Set whether you want a welcome mailer sent (if set up in the control panel) (true - send mailer; false - do not send mailer) */

$sendWelcomeMailer = false;

/* Step 4b: Set the groups/lists you want the user to be put in (set to true to be put in group or add the list ID (new CP only)) */

$group1 = false;
$group2 = false;
$group3 = false;
$group4 = false;
$group5 = false;

//$listIDs[] = 0000;
//$listIDs[] = 0000;

/* Step 5: Add any custom fields here */

/* Leave this line as is */
require '/var/www/shared/formincludes/signupFormFooter.php';
?>

<div id="<?= $multiFormName; ?>-wrapper">

	<? // Success Text  ?>
	<? if ($fh->showSuccessText): ?>

		<p class="successText">Thank you.<br />We will be in touch soon.</p>

	<? endif; ?>

	<? // To be displayed at page load ?>
	<? if ($fh->showForm): ?>

		<? // To be displayed if the repsonse comes back with errors ?>
		<? if ($fh->showErrorText): ?>

			<p class="errorText">You have not filled in all required fields correctly, please check the form and try again.</p>

		<? else: ?>

			<p class="welcomeText">Enter your name and email address below to hear the latest news from us.</p>

		<? endif; ?>

		<form action="" method="post" enctype="multipart/form-data" id="<?= $multiFormName; ?>">

			<div class="field-wrap<?php if ($fh->fields['forename']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-forename">First Name</label>
				<input type="text" name="forename" id="<?= $multiFormName ?>-forename" value="<?php echo $fh->fields['forename']->value ?>" data-required="<?= $forenameRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['surname']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-surname">Surname</label>
				<input type="text" name="surname" id="<?= $multiFormName ?>-surname" value="<?php echo $fh->fields['surname']->value ?>" data-required="<?= $surnameRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['company']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-company">Company</label>
				<input type="text" name="company" id="<?= $multiFormName ?>-company" value="<?php echo $fh->fields['company']->value ?>" data-required="<?= $companyRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['email']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-email">E-Mail</label>
				<input type="text" name="email" id="<?= $multiFormName ?>-email" value="<?php echo $fh->fields['email']->value ?>" data-required="<?= $emailRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['phone']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-phone">Phone</label>
				<input type="text" name="phone" id="<?= $multiFormName ?>-phone" value="<?php echo $fh->fields['phone']->value ?>" data-required="<?= $phoneRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['address']->fields['address1']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-address-address1">Address 1</label>
				<input type="text" name="address-address1" id="<?= $multiFormName ?>-address-address1" value="<?php echo $fh->fields['address']->fields['address1']->value ?>" data-required="<?= $addressRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['address']->fields['address2']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-address-address1">Address 2</label>
				<input type="text" name="address-address2" id="<?= $multiFormName ?>-address-address2" value="<?php echo $fh->fields['address']->fields['address2']->value ?>" data-required="0" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['address']->fields['town']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-address-town">Town/City</label>
				<input type="text" name="address-town" id="<?= $multiFormName ?>-address-town" value="<?php echo $fh->fields['address']->fields['town']->value ?>" data-required="<?= $addressRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['address']->fields['county']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-address-county">County</label>
				<input type="text" name="address-county" id="<?= $multiFormName ?>-address-county" value="<?php echo $fh->fields['address']->fields['county']->value ?>" data-required="0" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['address']->fields['postcode']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-address-postcode">Postcode</label>
				<input type="text" name="address-postcode" id="<?= $multiFormName ?>-address-postcode" value="<?php echo $fh->fields['address']->fields['postcode']->value ?>" data-required="<?= $addressRequired; ?>" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['address']->fields['country']->isError) { ?>error<? } ?>">
				<label for="<?= $multiFormName ?>-address-country">Country</label>
				<input type="text" name="address-country" id="<?= $multiFormName ?>-address-country" value="<?php echo $fh->fields['address']->fields['country']->value ?>" data-required="0" />
			</div>

			<div class="field-wrap<?php if ($fh->fields['additional-info']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-additional-info">Additional Info</label>
				<input type="text" name="additional-info" id="<?= $multiFormName ?>-additional-info" value="<?php echo $fh->fields['additional-info']->value ?>" data-required="<?= $additionalInfoRequired; ?>" />
			</div>

			<? /* <label for="<?=$multiFormName?>-cv">CV</label><br />
			  <input name="cv" type="file" class="file" id="<?=$multiFormName?>-cv" size="15" data-required="<?=$cvRequired; ?>" />
			  <?php if($fh->fields['cv']->isError) {?>
			  <span class="error">*<?php
			  if($fh->fields['cv']->isError==='size') {?>
			  File must be &lt; 2mb <?php
			  }
			  if($fh->fields['cv']->isError==='ext') {?>
			  Invalid file type <?php
			  } ?>
			  </span>
			  <?php } ?> */ ?>

			<div class="field-wrap<?php if ($fh->fields['comments']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-comments">Comments</label>
				<textarea name="comments" cols="" rows="5" id="<?= $multiFormName ?>-comments" data-required="<?= $commentsRequired; ?>"><?php echo $fh->fields['comments']->value ?></textarea>
			</div>

			<div class="field-wrap<?php if (@$fh->fields['mailing-list']->isError) { ?> error<? } ?>">
				<label for="<?= $multiFormName ?>-mailinglist">Join Mailing List?</label>
				<input name="mailing-list" id="<?= $multiFormName ?>-mailinglist" type="checkbox" value=""<?php echo @$fh->fields['mailing-list']->checked ? 'checked="checked" ' : '' ?> />
			</div>

			<div style="display:none !important;">
				<textarea name="textboxfilter" rows="" cols=""></textarea>
				<input type="hidden" name="multiFormName" value="<?= $multiFormName ?>" />
			</div>

			<input type="submit" name="submitted" value="Send" class="submit" />

		</form>

	<? endif; ?>

</div>

<?php
// Homepage
if($page == 'home'){
	$title = "";
	$keywords = "";
	$description = "";
}
// Contact
elseif($page == 'contact'){
	$title = "";
	$keywords = "";
	$description = "";
}
// Any other pages
else {
	$title = "";
	$keywords = "";
	$description = "";
}

// Fuel stuff
View::set_global('title', $title);
View::set_global('keywords', $keywords);
View::set_global('description', $description);
?>
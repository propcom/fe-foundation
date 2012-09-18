
<?php
// Homepage
if($page == 'home'){
	$title = "East Street Restaurant – Asian Restaurant London, Fresh Pan Asian Cuisine London";
	$keywords = "Asian restaurant London, East Asian restaurant central London, Pan Asian restaurant London, Asian restaurant West End, Asian restaurant Soho, Asian food Central London, Best Asian restaurant London, Asian street food, Thai restaurant London, Malaysian restaurant ";
	$description = "East Street Restaurant- Take a tour of the flavours of East Asia... Indonesia, Philippines, Japan and Korea, through healthy, high-quality food at value-for-money prices with great service";
}
// About us
elseif($page == 'about'){ 
	$title = "East Street Restaurant – Asian Restaurant London, East Asian Cuisine London";
	$keywords = "East street, East Asian Restaurant London, Asian food London, Thai restaurant Soho, Best Asian food in London, Pan Asian Restaurant London, Asian restaurant Oxford Street, Malaysian restaurant London, Thai restaurant London, Japanese restaurant London";
	$description = "East Street Restaurant – Take a tour of the flavours of East Asia with the freshest Pan Asian Cuisine.";
} 
// Menu
elseif($page == 'menu'){ 
	$title = "East Street Restaurant- East Asian Cuisine, Stir-fries, Curries, Steaming Noodles";
	$keywords = "Pan Asian restaurant London, Asian curries central London, Best Asian food London, Best Asian restaurant London, Stir-fry london, Thai restaurant, Thai curry, Singapore restaurant, Malaysian restaurant, Korean restaurant, Indonesian restaurant, Philippine restaurant london";
	$description = "East Street offers only the finest and freshest of East Asian Cuisine, with a great selection of Soups, curries, stir-fries, and more.";
} 
// Exclusive Offers
elseif($page == 'offers'){ 
	$title = "East Street Restaurant- Exclusive Offers, Take-away London, Special Offers London";
	$keywords = "East Street Offers, Best offers in London, Cheap Asian food, Restaurant vouchers, Gift vouchers, pre-performance offer, Asian take-away, take-away Tottenham court road, Asian food to go oxford street, East Asian Take-away, Thai Takeaway Central London";
	$description = "East Street Restaurant offers great value for money, along with great offers. Why not buy a gift voucher for your foodie friends?";
} 
// Reviews
elseif($page == 'reviews'){ 
	$title = "East Street Restaurant- Pan Asian restaurant London, Great Asian food in London";
	$keywords = "Best Asian restaurant London, Top rated Asian food, best East Asian restaurant, best Thai restaurant London, Best restaurant Soho, Best restaurant Oxford Street, Pan Asian restaurant London, great Asian food in Central London, best Japanese restaurant";
	$description = "East Street Restaurant offers London’s greatest selection of East Asian Cuisine, with great service and a welcoming atmosphere.";
} 
// Join our team
elseif($page == 'team'){ 
	$title = "East Street Restaurant- Join our team, work with us, London Job Opportunities";
	$keywords = "East Street London, best jobs in London, restaurant hiring, hiring waiters, hiring managers, hospitality jobs London, kitchen jobs London, job availabilities central London, work opportunities london, Asian restaurant hiring.";
	$description = "East Street offers a great working environment. Join our team and learn about the wonderful world of East Asian cuisine and culture.";
} 
// Feedback
elseif($page == 'feedback'){ 
	$title = "East Street Restaurant- Sign Up, Pan Asian Restaurant London";
	$keywords = "Asian restaurant London, East Asian restaurant central London, restaurant feedback, service feedback, restaurant review, Asian restaurant London, Thai restaurant London, East Asian restaurant London, Best Asian restaurant London, Central London restaurant";
	$description = "At East Street we want to make sure we provide you with the very best experience. Please get in touch and let us know how we are doing. ";
} 
// Contact
elseif($page == 'contact'){ 
	$title = "East Street Restaurant – 3-5 Rathbone Place, London, W1T 1HJ, 020 7323 0860";
	$keywords = "East Street restaurant, rathbone place restaurant, 3-5 rathbone place, W1T 1HJ, W1T restaurants, central London restaurants, Tottenham court road restaurants, Oxford street restaurant, Soho restaurant, west end restaurant, London restaurant";
	$description = "We offer Young’s award winning cask ales, regularly changing guest ales as well as an excellent range of wines and spirits to discover.";
} 
// Any other pages 
else {
	$title = "East Street Restaurant – Asian Restaurant London, Fresh Pan Asian Cuisine London";
	$keywords = "Asian restaurant London, East Asian restaurant central London, Pan Asian restaurant London, Asian restaurant West End, Asian restaurant Soho, Asian food Central London, Best Asian restaurant London, Asian street food, Thai restaurant London, Malaysian restaurant ";
	$description = "East Street Restaurant- Take a tour of the flavours of East Asia... Indonesia, Philippines, Japan and Korea, through healthy, high-quality food at value-for-money prices with great service";
}

// Fuel stuff
View::set_global('title', $title);
View::set_global('keywords', $keywords);
View::set_global('description', $description);
?>
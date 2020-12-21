<?php
	include("cmc_db.php");
	$title = get_product_title(5);
	$url = get_img_url(5);	
	include("elements/header.php");
	include("elements/localnav1.php");
	include("elements/content.newInformation.php");
	include("elements/footer.php");
	//include("js/slider.js");
?>
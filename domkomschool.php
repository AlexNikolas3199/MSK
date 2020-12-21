<?php
	include("cmc_db.php");
	$title = get_product_title(6);
	$url = get_img_url(6);
	include("elements/header.php");
	include("elements/localnav2.php");
	include("elements/content.newInformation.php");
	include("elements/footer.php");
	//include("js/slider.js");
?>
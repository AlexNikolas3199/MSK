<?php
	include("cmc_db.php");
	$id = $_GET["id"];
	$title = get_product_title($id);
	$url = get_img_url($id);
	include("elements/projectheader.php");
	include("elements/contentObjectMap.php");
	include("elements/footer.php");
?>
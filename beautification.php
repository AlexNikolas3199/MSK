<?php
	include("cmc_db.php");
	$id = $_GET["id"];
	$title = get_product_title($id);
	$url = get_img_url($id);
	include("elements/header.php");
	include("elements/localnav3.php");
	include("elements/contentBeautification.php");
	include("elements/footer.php");
?>
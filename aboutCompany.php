<?php
	include("cmc_db.php");
	$id = $_GET["id"];
	$title = get_product_title($id);
	$url = get_img_url($id);
	include("elements/header.php");
	include("elements/localnav1.php");
	include("elements/aboutUs.php");
	include("elements/footer.php");
?>
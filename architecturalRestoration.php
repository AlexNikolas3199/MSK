<?php
	include("cmc_db.php");
	$id = $_GET["id"];
	$title = get_product_title($id);
	$url = get_img_url($id);
	include("elements/header.php");
	include("elements/localnav3.1.2.php");
	include("elements/contentArchitecturalRestoration.php");
	include("elements/footer.php");
?>
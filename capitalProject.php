<?php
	include("cmc_db.php");
	$id = $_GET["id"];
	$title = get_product_title($id);
	$url = get_img_url($id);
	include("elements/projectheader.php");
	include("elements/contentCapitalProject.php");
	include("elements/footer.php");
	include("js/projectsJs.php");
?>
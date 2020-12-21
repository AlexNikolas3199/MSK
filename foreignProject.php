<?php
	include("cmc_db.php");
	$title = get_product_title(15);
	$url = get_img_url(15);
	include("elements/projectheader.php");
	include("elements/contentForeignProject.php");
	include("elements/footer.php");
	include("js/projectsJs.php");
?>
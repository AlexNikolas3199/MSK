<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/msk_logo_top 1.png" type="image/png">
	<link rel="stylesheet" href="cmс.css">
	<link rel="stylesheet" href="media_cmc.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>МСК</title>
	<style>
		.mobHeading{
			background:
			linear-gradient(
			rgba(60, 65, 82, 0.8) -35.06%,
			rgba(60, 65, 82, 0.5) 159.4%)
			,url(<?= $url ?>);
			background-position: center;
			background-size: cover
		}
		header{
			background: linear-gradient(180deg, rgba(27, 52, 92, 0.9) -35.06%, rgba(27, 52, 92, 0) 159.4%),url(<?= $url ?>);
		     background-size: cover;
		     background-position: center;
		}
	</style>
</head>
<body id="up">
	<a href="#up" class="up_button">
		<img src="images/up_button.png" alt="">
	</a>
	<input class="headerTrigger" type="checkbox">
	<div class="mobileHeader">
		<img src="images/mobilebtn.png" alt="">
		<a href="index.php?id=1"><img src="images/logo_mobile_top 2.png" alt=""></a>
	</div>
	<header>
		<nav class="headerNav">
			<ul>
				<li>
					<a href="index.php">Главная</a>
				</li>
				<li>
					<input type="checkbox"class="toggleSubMenu" id="sub_m1">
					<a href="aboutCompany.php?id=1">О компании <img src="images/submenuBtn.png"class="vec" alt=""></a>
					<label class="toggleSubMenu" for="sub_m1"></label>
					<ul>
						<li><a href="aboutCompany.php?id=1">О компании</a></li>
						<li><a href="licenses.php?id=2">Лицензии</a></li>
						<li><a href="recomLetters.php?id=3">Рекомендательные письма</a></li>
						<li><a href="partners.php?id=4">Партнеры</a></li>
						<li><a href="socResponsibility.php?id=5">Социальная ответственность</a></li>
					</ul>
				</li>
				<li>
					<a href="news_cmc.php?id=6">Новости</a>
				</li>
				<li>
					<a href="index.php">
					<img class="logo" src="images/msk_logo_top 1.png" alt="">
					</a>
				</li>
				<li>
					<input type="checkbox"class="toggleSubMenu" id="sub_m2">
					<a href="projects.php?id=7">Проекты <img src="images/submenuBtn.png"class="vec" alt=""></a>
					<label class="toggleSubMenu" for="sub_m2"></label>
					<ul>
						<li><a href="projects.php?id=7">Проекты</a></li>
						<li><a href="foreignProject.php?id=15">Зарубежное строительство</a></li>
						<li><a href="capitalProject.php?id=16">Капитальное строительство</a></li>
						<li><a href="socialobjects.php?id=17">Социальные объекты</a></li>
						<li><a href="objectMap.php?id=18">Карта объектов</a></li>
					</ul>
				<li>
					<input type="checkbox"class="toggleSubMenu" id="sub_m3">
					<a href="services.php?id=8">Услуги <img src="images/submenuBtn.png"class="vec" alt=""></a>
					<label class="toggleSubMenu" for="sub_m3"></label>
					<ul>
						<li><a href="services.php?id=8">Услуги</a></li>
						<li><a href="capital_construction.php?id=9">Капитальное строительство</a></li>
						<li><a href="reconstructionRepair.php?id=10">Реконструкции и кап.ремонт зданий</a></li>
						<li><a href="projection.php?id=11">Проектирование</a></li>
						<li><a href="technical_functions.php?id=12">Осуществление функций тех. заказчика</a></li>
						<li><a href="beautification.php?id=13">Благоустройство</a></li>
					</ul>
				</li>
				<li>
					<a href="Contacts.php?id=14">Контакты</a>
				</li>
			</ul>
		</nav>
		<div class="headerContacts">
			<div>
				<img src="images/headerphone.png" alt="">
				<p>+7 (862) 555-12-17</p>
			</div>
			<div>
				<img src="images/headermail.png" alt="">
				<p>iccompany.ru@gmail.com</p>
			</div>
		</div>
		<div class="headerLanguages">
			<p>English version of the site</p>
			<a href="#"><img src="images/eng_png.png" alt=""></a>
			<a href="#"><img src="images/rus_png.png" alt=""></a>
		</div>
		<h1><?= $title ?></h1>
	</header>
	<div class="mobHeading">
		<h2><?= $title ?></h2>
	</div>
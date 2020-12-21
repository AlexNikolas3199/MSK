<h2 class="heading">Наши строительные проекты</h2>
<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<?php 

$blocks=[

[	title=> "Реставрация с золочением статуи",
	desk=> "Гавана",
	image=> "images/top_img/cuba_respublica_03_975x0_f33.jpg",
	url=> "http://msk-construction.com/foreignProject.php?id=15", ],

	[	title=> "Восстановление золотого покрытия купола",
	desk=> "Гавана",
	image=> "images/top_img/04_975x0_f33.jpg",
	url=> "http://msk-construction.com/foreignProject.php?id=15", ],

	[	title=> "Спальный корпус на 300 мест ФБЛПУ",
	desk=> "Сочи",
	image=> "images/top_img/sk1_975x0_f33.jpg",
	url=> "http://msk-construction.com/capitalProject.php?id=16", ],

	[	title=> "ФКУ «Гохран России» при Министерстве финансов РФ",
	desk=> "Москва",
	image=> "images/top_img/gohran1_975x0_f33.jpg",
	url=> "http://msk-construction.com/capitalProject.php?id=16", ],

	[	title=> "Ремонт здания Донского Промышленного колледжа",
	desk=> "Ростов-на-Дону",
	image=> "images/top_img/colledge_slusar_0_975x0_f33.jpg",
	url=> "http://msk-construction.com/capitalProject.php?id=16", ],

	[	title=> "Учебный корпус Краснодарского высшего военного училища",
	desk=> "Краснодар",
	image=> "images/top_img/vu_fasad_02_975x0_f33.jpg",
	url=> "http://msk-construction.com/capitalProject.php?id=16", ],

	[	title=> "Лечебное учреждение Минобороны России",
	desk=> "Волжский",
	image=> "images/top_img/policlinika_volzhsky_01_975x0_f33.jpg",
	url=> "http://msk-construction.com/capitalProject.php?id=16", ],

	[	title=> "Технические здания и стационарные рабочие позиции",
	desk=> "Калининград",
	image=> "images/top_img/01_975x0_f33.jpg",
	url=> "http://msk-construction.com/capitalProject.php?id=16", ],


];


?>

<div class="flex_center mobvers dots" style="max-width: 1200px">

<?php for($i=0; $i<count($blocks);$i++) {?>

	<div  class="projectcard">
		<div class="projectcardContent" style="background:linear-gradient(0deg, #1B345C 0%, rgba(255, 255, 255, 0.17) 100%), url(<?=$blocks[$i][image]?>);background-size:cover;background-position:center">
			<div>
				<span><?=$blocks[$i][title]?></span>
				<p><?=$blocks[$i][desk]?></p>
				<a href="<?=$blocks[$i][url]?>">Подробнее</a>
			</div>
		</div>
	</div>


<?php } ?>

</div>
<div id="carouselExampleIndicators" class="carousel slide dotsY pg" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
		<div  class="projectcard">
		<div class="projectcardContent" style="background:linear-gradient(0deg, #1B345C 0%, rgba(255, 255, 255, 0.17) 100%), url(images/bgcard1.jpg);background-size:cover;background-position:center">
			<div>
				<span>Реставрация с золочением статуи</span>
				<p>Гавана</p>
				<a href="https://superlending.ru/msk/foreignProject.php?id=15">Подробнее</a>
			</div>
		</div>
	</div>
    </div>
<?php for($i=1; $i<count($blocks);$i++) {?>

    <div class="carousel-item">
		<div  class="projectcard">
		<div class="projectcardContent" style="background:linear-gradient(0deg, #1B345C 0%, rgba(255, 255, 255, 0.17) 100%), url(<?=$blocks[$i][image]?>);background-size:cover;background-position:center">
			<div>
				<span><?=$blocks[$i][title]?></span>
				<p><?=$blocks[$i][desk]?></p>
				<a href="<?=$blocks[$i][url]?>">Подробнее</a>
			</div>
		</div>
	</div>
    </div>

<?php } ?>
  </div>
</div>
<h2 class="heading">Новости</h2>
<div class="flex_center mobvers dots"style="max-width: 1200px">
	<div class="newscards">
		<div class="img"></div>
		<h4><a href="new1.php">Матвиенко: российские специалисты провели реставрацию купола...</a></h4>
		<span>30.11.2019</span>
		<p>Российские специалисты, занимавшиеся реставрацией купола Капитолия в Гаване, выполнили работы на высочайшем уровне, сказала спикер Совета Федерации...</p>
	</div>
	<div class="newscards">
		<div class="img"></div>
		<h4><a href="new2.php">Дмитрий Медведев посетил Национальный Капитолий в Гаване</a></h4>
		<span>01.12.2019</span>
		<p>Председатель Правительства возложил венок к Могиле неизвестного борца за независимость Кубы, а также принял участие в церемонии передачи Государственного...</p>
	</div>
	<div class="newscards">
		<div class="img"></div>
		<h4><a href="new3.php">Соловки являются уникальным местом истории и веры, которое...</a></h4>
		<span>03.12.2019</span>
		<p>5 декабря премьер-министр России Дмитрий Медведев дал большое ежегодное интервью телеканалам, в рамках которого затронул тему восстановления...</p>
	</div>
</div>
<div id="carouselExampleIndicators2" class="carousel slide dotsY" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
		<div class="newscards">
			<div class="img"></div>
			<h4><a href="new1.php">Матвиенко: российские специалисты провели реставрацию купола...</a></h4>
			<span>30.11.2019</span>
			<p>Российские специалисты, занимавшиеся реставрацией купола Капитолия в Гаване, выполнили работы на высочайшем уровне, сказала спикер Совета Федерации...</p>
		</div>
    </div>
    <div class="carousel-item">
		<div class="newscards">
			<div class="img"></div>
			<h4><a href="new2.php">Дмитрий Медведев посетил Национальный Капитолий в Гаване</a></h4>
			<span>01.12.2019</span>
			<p>Председатель Правительства возложил венок к Могиле неизвестного борца за независимость Кубы, а также принял участие в церемонии передачи Государственного...</p>
		</div>
    </div>
    <div class="carousel-item">
		<div class="newscards">
			<div class="img"></div>
			<h4><a href="new3.php">Соловки являются уникальным местом истории и веры, которое...</a></h4>
			<span>03.12.2019</span>
			<p>5 декабря премьер-министр России Дмитрий Медведев дал большое ежегодное интервью телеканалам, в рамках которого затронул тему восстановления...</p>
		</div>
    </div>
  </div>
</div>
<h2 class="heading">О компании</h2>
<section class="СМСDevelopment">
	<h3>МСК Международная Строительная Компания</h3>
	<p>Строительная компания «МСК» включает в себя комплексное проектирование, строительство гражданских и промышленных объектов, а так же рекреационных и спортивных комплексов, культурно-деловых центров, жилых и общественных зданий, инженерных коммуникаций, автомобильных дорог, объектов энергетики, гидротехнических сооружений. Профессиональный опыт штатных сотрудников «МСК» и сотрудничество с лучшими российскими <br>и зарубежными архитекторами, строителями и дизайнерами гарантируют высокое качество и международный уровень нашей работы. <br>Это подтверждается наличием ряда престижных наград Российских и международных выставок и конкурсах, в которых наши специалисты принимали участие.</p>
	<h3>Высокий международный уровень нашей работы обеспечивается:</h3>
	<div class="mobstruct">
		<img src="images/factor_points.png" alt="">
		<div class="mobstructtext">
			<p>- эффективными современными технологиями управления;</p>
			<p>- высокими стандартами корпоративной культуры;</p>
			<p>- оптимальным сочетанием инновационных технологий с надежными и проверенными методами;</p>
			<p>- отработанными процедурами взаимодействия с органами власти и управления;</p>
			<p>- высоким уровнем профессионализма штатных сотрудников компании, а так же привлекаемых к нашим проектам лучших российских и зарубежных специалистов;</p>
			<p>- развитой материальной базой;</p>
			<p>- прозрачностью ведения дел;</p>
			<p>- грамотным маркетингом.</p>
		</div>
	</div>
	<div class="flex_center">
		<div data-inf="- эффективными современными технологиями управления;" class="ray"></div>
		<div data-inf="- высокими стандартами корпоративной культуры;" class="ray"></div>
		<div data-inf="- оптимальным сочетанием инновационных технологий с надежными и проверенными методами;" class="ray"></div>
		<div data-inf="- отработанными процедурами взаимодействия с органами власти и управления;" class="ray"></div>
		<div data-inf="- высоким уровнем профессионализма штатных сотрудников компании, а так же привлекаемых к нашим проектам лучших российских и зарубежных специалистов;" class="ray"></div><div data-inf="- развитой материальной базой;" class="ray"></div>
		<div data-inf="- прозрачностью ведения дел;" class="ray"></div>
		<div data-inf="- грамотным маркетингом." class="ray"></div>
	</div>
</section>
<section class="textimg">
	<p class="lefttext">На сегодняшний день компания «МСК» может предложить полный комплекс услуг в области девелопмента, проектирования, строительства <br>и консалтинга: от разработки концептуальной идеи, бизнес-плана и проекта, до строительства объекта "под ключ". При этом компания сочетает использование международных технологий и стандартов со знанием специфических особенностей региона-заказчика, учитывая все требования<br> и предлагая наиболее эффективное решение, принимая на себя часть ответственности за дальнейший успех реализуемого проекта. <br>Мы ориентируемся на оптимальное соотношение цены и качества, организацию оптимального управления проектированием и капитальным строительством.<br>Использование современных строительных технологий и отработанных процедур эффективного взаимодействия с органами власти и управления позволяет решать поставленные задачи в кратчайшие сроки. Компания полностью отвечает перед заказчиком за осуществление комплекса подрядных работ и их надлежащее качество. </p>
	<div class="rightimg"></div>
</section>
	<p class="lasttext">Наша компания является надежным и честным бизнес-партнером, что обеспечивается принципом прозрачности ведения дел, а также пристальным вниманием к обеспечению конфиденциальности информации о взаимоотношениях с партнерами. Успех компании базируется на эффективном менеджменте, грамотном маркетинге и профессионализме сотрудников.</p>
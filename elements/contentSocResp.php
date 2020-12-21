<section class="textContent">
	<h3>Строительная компания OOO "МСК", являясь успешной и стремительно развивающейся организацией, рассматривает социальную активность, как неотъемлемую часть бизнес-процесса.</h3>
	<p style="text-align: left">Участие в повышении качества жизни общества и забота о здоровом развитии подрастающего поколения является почетной ответственностью успешного бизнеса - такова позиция руководства компании.<br><br>
	Среди социально значимых проектов, в которых участвует компания, можно выделить следующие:</p>
	<div class="flex_center">


	<?php 

$blocks=[

[	date=> "13.07.2018",
	title=> "День защиты детей 2018",
	desk=> "Праздник, посвященный Международному Дню защиты детей.",
	image=> "images/socresp/cmc_den_zashityi_detey_2018_05.jpg",
	url=> "soc1.php", ],

	[	date=> "13.07.2018",
	title=> "Школа Домкома",
	desk=> "В апреле 2018 года член Партии «Единая Россия», секретарь первичного отделения СЦ № 46-55 Паршин Анатолий Игоревич передал в дар Совету ТОС «Центральный» комплекты офисной мебели для организуемой «Школы Д...",
	image=> "images/socresp/cmc_school_2018_08.jpg",
	url=> "soc2.php", ],

	[	date=> "13.07.2018",
	title=> "Новый год 2018",
	desk=> "Проведение Новогоднего праздничного мероприятия для детей многодетных и малообеспеченных семей...",
	image=> "images/socresp/cmc_ng_2018_01.jpg",
	url=> "soc3.php", ],

	[	date=> "04.06.2017",
	title=> "День защиты детей 2017",
	desk=> "По сложившейся многолетней традиции Совет ТОС «Центральный» совместно с активом Партии «Единая Россия» и Управление молодежной политики Центрального р-на, 1 июня 2017 года...",
	image=> "images/socresp/IMG-20170605-WA0007.jpg",
	url=> "soc4.php", ],

	[	date=> "11.01.2017",
	title=> "Новый год 2017",
	desk=> "По инициативе координатора 8-го партийного округа Парнюгиной Л.Н. и Совета ТОС «Центральный» и секретаря Первичного отделения Партии «Единая Россия» Паршина Анатолия Игоревича...",
	image=> "images/socresp/IMG-20161227-WA0002.jpg",
	url=> "soc5.php", ],

	[	date=> "13.06.2016",
	title=> "Открытие проекта «Школа Домкома»",
	desk=> "   По инициативе жителей города Сочи, председателей квартальных и домовых комитетов было рассмотрено предложение об открытии в помещении Совета ТОС «Центральный» образовательного проекта «Школа Домкома»...",
	image=> "images/socresp/cmc_school_2018_04.jpg",
	url=> "soc6.php", ],

	[	date=> "05.06.2016",
	title=> "День защиты детей 2016",
	desk=> "1 июня 2016 года  в Международный День защиты детей на спортивной площадке по улице Роз,61 совместно с активом Партии «Единая Россия», Советом ТОС «Центральный» был проведено праздничное мероприятие...",
	image=> "images/socresp/20160601_175748.jpg",
	url=> "soc7.php", ],

	[	date=> "11.01.2016",
	title=> "Новый год 2016",
	desk=> "В январе 2016 года были поздравлены 100 детей с Новым  годом, из  малообеспеченных и многодетных семей микрорайона «Центральный»...",
	image=> "images/socresp/20151224_150903.jpg",
	url=> "soc8.php", ],

];


?>



		<?php for($i=0; $i<count($blocks);$i++) {?>
			
			<div class="socCard" style="background:linear-gradient(0deg,rgba(27, 52, 92, 0.85),rgba(27, 52, 92, 0.63)),url(<?=$blocks[$i][image]?>);background-size:cover;background-position:center">
			<div><?=$blocks[$i][date]?></div>
			<h4><?=$blocks[$i][title]?></h4>
			<hr>
			<p><?=$blocks[$i][desk]?> </p>
			<a href="<?=$blocks[$i][url]?>">Подробнее</a>
		</div>
		<?php } ?>

		<!--div class="socCard">
			<div>13.07.2018</div>
			<h4>ДЕНЬ ЗАЩИТЫ ДЕТЕЙ 2018</h4>
			<hr>
			<p>Праздник, посвященный Международному Дню защиты детей.</p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>13.07.2018</div>
			<h4>ШКОЛА ДОМКОМА</h4>
			<hr>
			<p>В апреле 2018 года член Партии «Единая Россия», секретарь первичного отделения СЦ № 46-55 Паршин Анатолий Игоревич передал в дар Совету ТОС «Центральный» комплекты офисной мебели для организуемой «Школы домкома».</p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>13.07.2018</div>
			<h4>НОВЫЙ ГОД 2018</h4>
			<hr>
			<p>Проведение Новогоднего праздничного мероприятия для детей многодетных и малообеспеченных семей. С Новым годом были поздравлены и вручены подарочные наборы лучшим домкомам, инвалидам по здоровью из категории малоимущих.</p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>04.06.2017</div>
			<h4>ДЕНЬ ЗАЩИТЫ ДЕТЕЙ 2017</h4>
			<hr>
			<p>По сложившейся многолетней традиции Совет ТОС «Центральный» совместно с активом Партии «Единая Россия» и Управление молодежной политики Центрального р-на, 1 июня 2017 года в Международный День защиты детей провели на спортивной площадке по улице Роз,61 праздник «Площадка нашего двора». </p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>11.01.2017</div>
			<h4>НОВЫЙ ГОД 2017</h4>
			<hr>
			<p>По инициативе координатора 8-го партийного округа Парнюгиной Л.Н. и Совета ТОС «Центральный» и секретаря Первичного отделения Партии «Единая Россия» Паршина Анатолия Игоревича в январе 2017 года в Районном Доме Культуры состоялся Новогодний утренник. В празднике участвовало 60 детей. </p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>13.06.2016</div>
			<h4>ОТКРЫТИЕ ОБРАЗОВАТЕЛЬНОГО ПРОЕКТА "ШКОЛА ДОМКОМА"</h4>
			<hr>
			<p>По инициативе жителей города Сочи, председателей квартальных и домовых комитетов было рассмотрено предложение об открытии в помещении Совета ТОС «Центральный» образовательного проекта «Школа Домкома».</p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>05.06.2016</div>
			<h4>ДЕНЬ ЗАЩИТЫ ДЕТЕЙ 2016</h4>
			<hr>
			<p>1 июня 2016 года в Международный День защиты детей на спортивной площадке по улице Роз,61 совместно с активом Партии «Единая Россия», Советом ТОС «Центральный» был проведено праздничное мероприятие «Вот и лето пришло» для детей различных возрастов. </p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>13.07.2018</div>
			<h4>НОВЫЙ ГОД 2016</h4>
			<hr>
			<p>В январе 2016 года были поздравлены 100 детей с Новым годом, из малообеспеченных и многодетных семей микрорайона «Центральный». </p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>22.08.2015</div>
			<h4>ДЕНЬ ФЛАГА 2015</h4>
			<hr>
			<p>22.08.2015г. в День Российского флага на спортивной площадке у дома №61 по ул.Роз прошло праздничное мероприятие. Благотворительная помощь в приобретении подарков оказал Паршин А.И. </p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>13.06.2014</div>
			<h4>ОРГТЕХНИКА ДЛЯ ТОС "ЦЕНТРАЛЬНЫЙ"</h4>
			<hr>
			<p>В 2014 году Совету Территориального Общественного Самоуправления микрорайона «Центральный» Центрального района города Сочи, Паршиным А.И. была приобретена оргтехника. </p>
			<a href="socRespItem.php">Подробнее</a>
		</div>
		<div class="socCard">
			<div>13.01.2014</div>
			<h4>НОВЫЙ ГОД 2014</h4>
			<hr>
			<p>В Новогодние праздники в канун 2014 года было вручено 150 подарочных наборов детям из многодетных и неполных семей, а также членам Совета ветеранов и Первичной организации Общества инвалидов. </p>
			<a href="socRespItem.php">Подробнее</a>
		</div-->

	</div>
	<div class="flex_center">

	</div>
</section>
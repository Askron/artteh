<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/officerepair.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<div class="head container-fluid">
		<span class="headTitle">РЕМОНТ ОФИСОВ</span><br><br><br>
		<a href="index.php" class="headLink">ГЛАВНАЯ СТРАНИЦА</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>РЕМОНТ ОФИСОВ</b>
	</div>
	<div class="container">
		<div class="screen1">
			<span class="screen1title">КОМПАНИЯ «ARTTEH» ПРЕДЛАГАЕТ ВАМ ПРОФЕССИОНАЛЬНЫЙ ПОДХОД К РЕМОНТУ ОФИСОВ. CПЕЦИАЛИЗИРОВАННАЯ БРИГАДА РАБОЧИХ НЕДОРОГО И НА ВЫСОКОМ УРОВНЕ ПРОВЕДЕТ РЕМОНТНЫЕ РАБОТЫ, С УЧЕТОМ ТРЕБОВАНИЙ ЗАКАЗЧИКА И С УЧЕТОМ ВСЕХ ЕГО ПОЖЕЛАНИЙ.</span><br><br>
			<div class="row">
				<div class="col-sm-3"><img src="img/officerepair1.jpg" class="img-responsive"></div>
				<div class="col-sm-3"><img src="img/officerepair2.jpg" class="img-responsive"></div>
				<div class="col-sm-6" style="font-size:14pt; color:#777">Мы ремонтируем любые офисы и осуществляем как мелкий косметический ремонт офисов, так и комплексный ремонт офисов под ключ, капитальный ремонт офисов с полной перепланировкой, а также эксклюзивные варианты оформления интерьера с привлечением дизайнеров.<br><b>Благодаря гибкой ценовой политике, у нас каждый сможет сделать ремонт по карману, будь то покраска в офисе стен, окраска в офисе отдельных элементов, или глобальный проект капитального ремонта.</b></div>
			</div><br><br><br><br>
			<span class="screen1text1">Затрудняетесь с чего начать ремонт в деловом офисе, рекомендуем обратиться в нашу компанию, где мы поможем найти верное решение для проведения ремонта в деловом стиле!</span>
			<br><br><br><br><br>
			<button class="screen1button" data-toggle="collapse" data-target="#sum1"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;Пол</button>
			<div id="sum1" class="collapse"><br><?php include 'sums2/sum1.php' ?><br><br></div>
			<button class="screen1button" data-toggle="collapse" data-target="#sum2"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;Стены</button>
			<div id="sum2" class="collapse"><br><?php include 'sums2/sum2.php' ?><br><br></div>
			<button class="screen1button" data-toggle="collapse" data-target="#sum3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;Потолки</button>
			<div id="sum3" class="collapse"><br><?php include 'sums2/sum3.php' ?><br><br></div>
			<button class="screen1button" data-toggle="collapse" data-target="#sum4"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;Электрическая разводка</button>
			<div id="sum4" class="collapse"><br><?php include 'sums2/sum4.php' ?><br><br></div>
			<button class="screen1button" data-toggle="collapse" data-target="#sum5"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;Двери, окна</button>
			<div id="sum5" class="collapse"><br><?php include 'sums2/sum5.php' ?><br><br></div>
			<button class="screen1button" data-toggle="collapse" data-target="#sum6"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;Сантехника</button>
			<div id="sum6" class="collapse"><br><?php include 'sums2/sum6.php' ?><br><br></div><br><br><br><br><br>
			<img src="img/crown.png"><br><br>
			<span class="screen1title">НАШИ ПРИЕМУЩЕСТВА</span><br><br>
			<span class="screen1text2"> — Материалы закупаются по выгодной цене у партнеров нашей компании, тем самым мы снижаем себестоимость работ<br>— На ваш объект осуществляется бесплатная доставка материала, с поднятием на этаж проведения ремонтных работ<br>— Универсальная разработка дизайн-проекта проведения ремонта офиса на должном уровне<br>— К работе допускаются только квалифицированные мастера, имеющие опыт работы в данном направлении и специальную квалификацию<br>— Перед заключением договора, составляется смета и заключается полноценный договор<br>— На все виды работ, мы даем гарантию сроком на 3 года.</span>
		</div>
	</div>
	<?php include 'footer.php'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$(window).scroll(function () {
			if (window.pageYOffset<65) {
				$('.navbar').css('background-color','rgba(255, 255, 255, 0)');
				$('.navbar .nav > li > a, .navbar .nav > li > a:hover, .navbar .nav > li > a:focus, .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus, .navbarText1, .navbar .navbar-text>i, .navbar .navbar-text>.btn, .navbar .navbar-text>.btn:hover, .navbar .navbar-text>.btn:focus, .navbarText2').css('color','white');
			} else {
				$('.navbar').css('background-color','white');
				$('.navbar .nav > li > a, .navbar .nav > li > a:hover, .navbar .nav > li > a:focus, .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus, .navbarText1, .navbar .navbar-text>i, .navbar .navbar-text>.btn, .navbar .navbar-text>.btn:hover, .navbar .navbar-text>.btn:focus, .navbarText2').css('color','#444');
			}
		});
	</script>
</body>
<div id="callback" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
				<h4 class="modal-title">Заказать обратный звонок</h4>
			</div>
			<div class="modal-body">
				Специалист ООО "Арттех" свяжется с вами в ближайшее время.<br><br>
				<form action="callbacknp.php" method="post">
					<div class="form-group">
						<label for="callbackInputName">Имя:</label>
						<input name="name" type="text" class="form-control" id="callbackInputName" placeholder="Введите имя" required>
					</div>
					<div class="form-group">
						<label for="callbackInputPhone">Телефон:</label>
						<input name="phone" type="phone" class="form-control" id="callbackInputPhone" placeholder="Введите телефон" required>
					</div>
					<button type="submit" class="btn btn-default">Отправить</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="imgZoom1" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer1.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom2" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer2.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom3" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer3.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom4" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer4.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom5" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer5.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom6" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer6.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom7" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer7.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom8" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer8.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom9" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer9.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom10" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer10.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom11" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer11.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
<div id="imgZoom12" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" type="button" data-dismiss="modal">×</button>
				<img src="img/specoffer12.jpg" class="screenImg">
			</div>
		</div>
	</div>
</div>
</html>
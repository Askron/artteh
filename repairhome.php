<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/repairhome.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<div class="head container-fluid">
		<span class="headTitle">РЕМОНТ И СТРОИТЕЛЬСТВО ДОМОВ</span><br><br><br>
		<a href="index.php" class="headLink">ГЛАВНАЯ СТРАНИЦА</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>РЕМОНТ И СТРОИТЕЛЬСТВО ДОМОВ</b>
	</div>
	<div class="screen1 container">
		<div class="row">
			<div class="col-sm-4">
				<img src="img/photo.png"><br><br>
				<div class="screen1title">ДИЗАЙН ИНТЕРЬЕРА</div><br>
				<span class="screen1text">Полный комплект рабочей документации<br>Готовые и индивидуальные дизайн-проекты<br>Подбор мебели и материалов, 3D визуализация</span>
			</div>
			<div class="col-sm-4">
				<img src="img/cushion.png"><br><br>
				<div class="screen1title">ОТДЕЛОЧНЫЕ РАБОТЫ</div><br>
				<span class="screen1text">Капитальный ремонт коттеджей и загородных домов<br>Весь спектр услуг — от демонтажа до сборки мебели</span>
			</div>
			<div class="col-sm-4">
				<img src="img/home.png"><br><br>
				<div class="screen1title">СТРОИТЕЛЬНЫЕ РАБОТЫ</div><br>
				<span class="screen1text">Управление полным циклом работ<br>Проектирование домов любой сложности<br>Строительство домов, бань, беседок, коттеджей, таунхаусов</span>
			</div>
		</div>
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
	</div><br><br>
	<div class="container-fluid screen2">
		<div class="container">
			<br><br><br><span class="screen2title">ВСЕ НАШИ ЗНАНИЯ И УМЕНИЯ НАПРАВЛЕНЫ НА РЕЗУЛЬТАТ, ЧТО БЫ ВЫ ОСТАЛИСЬ ДОВОЛЬНЫ НАШИМ С ВАМИ СОТРУДНИЧЕСТВОМ.</span><br><br>
			<span class="screen2text">— Среди наших партнеров крупнейшие поставщики строительных материалов, что позволяет закупать их по самым низким ценам.<br>— Наша материально-техническая база включает в себя полный спектр строительного оборудования и спецтехники.<br>— На все оказанные услуги нами предоставляется гарантия качества.</span>
		</div><br><br><br><br><br><br>
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
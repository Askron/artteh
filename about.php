<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/about.css">
</head>
<body>
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
	<?php include 'menu.php'; ?>
	<div class="head container-fluid">
		<span class="headTitle">О НАС</span><br><br><br>
		<a href="index.php" class="headLink">ГЛАВНАЯ СТРАНИЦА</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>О НАС</b>
	</div>
	<div class="container screen">
		<div class="screenTitle">РЕМОНТНО-СТРОИТЕЛЬНАЯ КОМПАНИЯ «ARTTEH» В ТЕЧЕНИИ 10-ТИ ЛЕТ УСПЕШНО ЗАНИМАЕТСЯ СТРОИТЕЛЬСТВОМ И РЕМОНТОМ НА ТЕРРИТОРИИ САМАРЫ И САМАРСКОЙ ОБЛАСТИ.</div><br>
		<div class="row">
			<div class="col-sm-4 col-xs-12"><img class="img-responsive" src="img/about1.png"></div>
			<div class="col-sm-8 col-xs-12 screenText1">Выполняем работы различной степени сложности от проекта и дизайна до полного строительства «под ключ».<br>— Разработка дизайн-проектов и подбор материалов<br>— Внутренняя отделка помещений любой сложности<br>— Ремонт квартир, офисов, коттеджей, торговых центров.<br>— Строительство загородных домов и коттеджей «под ключ»</div>
		</div><br><br><br><br>
		<div class="screenTitle">В НАШЕЙ КОМАНДЕ – ДИЗАЙНЕРЫ, МАСТЕРА СВОЕГО ДЕЛА, КОТОРЫЕ НЕ ТОЛЬКО ЗНАЮТ СВОЮ РАБОТУ, НО И ПОДХОДЯТ К НЕЙ С ЛЮБОВЬЮ, ВКЛАДЫВАЯ НЕ ТОЛЬКО УМЕНИЕ, НО И ЧАСТИЧКУ ДУШИ. БЛАГОДАРЯ ЭТОМУ ВСЕ ПРОЕКТЫ НАШЕЙ КОМПАНИИ – ЭТО НЕ ПРОСТО СТИЛЬНЫЕ И КРАСИВЫЕ ИНТЕРЬЕР ДИЗАЙН, ЭТО ЕЩЕ И УЮТ, ДОМАШНЕЕ ТЕПЛО.</div><br>
		<div class="row">
			<div class="col-sm-3 col-xs-12"><img class="img-responsive" src="img/about2.png"></div>
			<div class="col-sm-9 col-xs-12 screenText1">— Индивидуальный подход к каждому заказчику, в сочетании с уверенностью в своих силах дают нам возможность выполнять уникальные проекты.<br>— Рабочие, которые выполняют строительные и отделочные работы – лучшие в своей профессии. Они владеют навыками работы с самими современными материалами, а также новейшим оборудованием, что позволяет с уверенностью говорить о том, что наши проекты – это не только стиль, но еще и непревзойденное качество.<br>— Мы осуществляем постоянный и независимый контроль на всех этапах работ. Вы и сами можете осуществлять все необходимые проверки. Мы ни в коем случае не препятствуем этому.<br>— Наши клиенты всегда остаются довольными нашими работами по дизайну и проектированию квартир и офисов, а также строительству и ремонту квартир, домов, коттеджей.</div>
		</div><br><br><br><br>
		<div class="screenTitle">РАБОТА С НАМИ – ЭТО ТОЧНОЕ СОБЛЮДЕНИЕ СМЕТЫ, СРОКОВ, А ТАКЖЕ ДРУГИХ ДОГОВОРЕННОСТЕЙ. КРОМЕ ТОГО, ЭТО ОТЛИЧНОЕ СОЧЕТАНИЕ СТОИМОСТИ И КАЧЕСТВА УСЛУГ.</div><br>
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
</html>
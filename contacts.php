<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/contacts.css">
</head>
<body>
	<?php include 'menu.php'; ?>
	<div class="head container-fluid">
		<span class="headTitle">РЕМОНТ И СТРОИТЕЛЬСТВО ДОМОВ</span><br><br><br>
		<a href="index.php" class="headLink">ГЛАВНАЯ СТРАНИЦА</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>РЕМОНТ И СТРОИТЕЛЬСТВО ДОМОВ</b>
	</div>
	<div class="screen1 container">
		<div class="row">
			<div class="col-sm-6">
				<img src="img/phone.png"><br><br>
				<div class="screen1title">СВЯЗЬ С НАМИ</div><br>
				<span class="screen1text">+7 (996) 727-48-49</span>
			</div>
			<div class="col-sm-6">
				<img src="img/sheet.png"><br><br>
				<div class="screen1title">СВЯЗЬ С НАМИ</div><br>
				<span class="screen1text">artteh63@yandex.ru</span>
			</div>
		</div>
	</div>
	<div class="screen2 container">
		<div class="col-sm-6 col-sm-offset-3 text-center">
			<form action="callbacknem.php" method="post">
				<div class="form-group">
					<input name="name" type="text" class="form-control screen2input" id="contactInputName" placeholder="ИМЯ" required>
				</div>
				<div class="form-group">
					<input name="email" type="email" class="form-control screen2input" id="contactInputEmail" placeholder="E-MAIL" required>
				</div>
				<div class="form-group">
					<textarea name="text" type="text" class="form-control screen2input" id="contactInputText" placeholder="СООБЩЕНИЕ" style="resize:vertical;" required></textarea>
				</div>
				<button type="submit" class="btn btn-default screen2btn">ОТПРАВИТЬ</button>
			</form>
		</div>
	</div><br><br>
	<div class="screen3 container-fluid">
		<br><span class="screen3head">Хотите сэкономить время и деньги?</span><br><br>
		<span class="screen3text">Тогда Вам точно к нам! Быстро, качественно и по отличной цене.<br>Оставьте контактный номер телефона. Мы перезвоним и обсудим Ваш проект!</span><br><br><br>
		<div class="container screen3formWrap">
			<form action="callbackp.php" method="post">
				<div class="form-group">
					<input name="phone" type="phone" class="form-control" id="screen3inputPhone" placeholder="Введите телефон" required>
				</div><br>
				<button type="submit" class="btn btn-default">Отправить</button>
			</form><br>
		</div>
	</div><br><br><br><br>
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
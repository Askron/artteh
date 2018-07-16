<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/index.css">
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
	<div class="screen1">
		<div class="container">
			<div class="col-md-6 col-sm-12 screen1textWrap">
				<div class="screen1text">ARTTEH<br><span class="screen1text1">РЕМОНТНО-СТРОИТЕЛЬНАЯ КОМПАНИЯ Г. САМАРА</span></div>
			</div>
			<div class="col-md-6 col-sm-12 screen1blockWrap">
				<div class="screen1block">
					<span class="screen1blockHead">Быстрый расчёт</span><br><br>
					<form action="callbacknpm.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="screen1inputName" name="name" placeholder="Имя" required>
						</div>
						<div class="form-group">
							<input type="phone" class="form-control" id="screen1inputPhone" name="phone" placeholder="Телефон" required>
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control" id="screen1inputText" name="text" placeholder="Сообщение" rows="5" required style="resize:none;"></textarea>
						</div>
						<button type="submit" class="btn btn-default">Отправить</button>
					</form>
				</div>
			</div>
			<div class="screen1btnWrap col-sm-2 col-sm-offset-5 hidden-sm">
				<a href="about.php"><button class="btn screen1btn">О КОМПАНИИ</button></a>
			</div>
		</div>
	</div>
	<div class="screen2 container">
		<div class="col-sm-6 screen2text">
			<span class="screen2text1">РЕМОНТ КВАРТИР И ОФИСОВ В САМАРЕ И САМАРСКОЙ ОБЛАСТИ</span>
			<hr style="height:1px; border:none; color:#aaa; background-color:#aaa;">
			<span class="screen2text2">Компания состоит из специалистов работающих в различных сферах — дизайн и архитектура, проектирование, согласование, ремонт и отделка, инженерные сети. Каждый из них профессионал своего дела, имеют разрешение на те виды деятельности которые они представляют и их работа проверена временем.</span>
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-6">
					<div class="screen2block">
						<img src="img/alarm.png"><br><br>
						Строгое соблюдение всех сроков
					</div>
				</div>
				<div class="col-sm-6">
					<div class="screen2block">
						<img src="img/crown.png"><br><br>
						Опыт ремонтных работ более 12 лет
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="screen2block">
						<img src="img/ruler.png"><br><br>
						Замер и составление сметы бесплатно
					</div>
				</div>
				<div class="col-sm-6">
					<div class="screen2block">
						<img src="img/shield.png"><br><br>
						Гарантия на выполненные работы до 5 лет
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="screen3 container-fluid">
		<br><span class="screen3head">Хотите сэкономить время и деньги?</span><br><br>
		<span class="screen3text">Тогда Вам точно к нам! Быстро, качественно и по отличной цене.<br>Оставьте контактный номер телефона. Мы перезвоним и обсудим Ваш проект!</span><br><br><br>
		<div class="container screen3formWrap">
			<form action="callbackp.php" method="post">
				<div class="form-group">
					<input name="phone" type="phone" class="form-control" id="screen3inputPhone" placeholder="Введите телефон" required>
				</div><br>
				<button type="submit" class="btn btn-default">Отпправить</button>
			</form><br>
		</div>
	</div>
	<div class="screen4 container">
		<span class="screen4head">ЛЮДИ <i class="fa fa-heart-o" aria-hidden="true"></i> НАС</span>
		<br><br><br>
		<div id="screen4carousel" class="carousel slide" data-ride="carousel" data-interval="15000">
			<ol class="carousel-indicators">
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="0" class="active"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="1"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="2"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="3"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="4"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="5"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="6"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="7"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="8"></li>
				<li data-target="#screen4carousel" style="background-color:black;" data-slide-to="9"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					Я ничего не понимаю в ремонте! Боялась, что меня обманут и сделают плохой ремонт. К счастью, мне порекомендовали ребят из «ARTTEH». Ремонт обошелся даже дешевле, чем я ожидала. Все было сделано в срок. Большое спасибо!<br><br>ТАТЬЯНА
				</div>
				<div class="item">
					Приятно было общаться с абсолютно адекватными и профессиональными людьми, четко знающими свое дело. Люди не словами, а реальными делами подтвердили свой авторитет в вопросе ремонта.<br><br>МАРИНА К.
				</div>
				<div class="item">
					Осталась очень довольна всеми проведенными работами, от начала и до завершения. Выбор "Artteh" был случайным, по интернету, но теперь по любым видам ремонтных работ, я знаю куда буду обращаться, а также рекомендовать друзья и знакомым. Спасибо.<br><br>ОЛЬГА
				</div>
				<div class="item">
					Мы несколько раз переезжали, поэтому я хорошо знаком с ремонтами, в связи с чем могу оценить профессионализм и качество: всё работы были произведены на высшем уровне. Прежде всего, хотел бы отметить скорость, с которой был проведён сложный ремонт (ремонт квартиры по дизайн проекту). Когда мне сказали, что ремонт будет сделан за два месяца, я не поверил, думал минимум месяца четыре, а напрасно, сроки были выдержаны.<br><br>ВЛАДИСЛАВ Ш.
				</div>
				<div class="item">
					Ребята просто молодцы!Сделали шикарную ванную комнату из старого,захламленного помещения всего за 4-5 дней.Я даже не подозревала что такое вообще возможно.Спасибо большое мастерам,теперь буду обращаться только к вам!!!Сейчас купание - праздник))<br><br>МАРИАННА К.
				</div>
				<div class="item">
					Мне ремонтировали однокомнатную квартиру. Я вполне довольна отношением рабочих к делу, старались, выполняли все аккуратно. Прораб советовался со мной, принимал во внимание мои пожелания. Заботу о доставке технических материалов работники взяли на себя. На сроки выполнения не жалуюсь.<br><br>ЛЮДМИЛА Д.
				</div>
				<div class="item">
					Хотел бы поблагодарить за хорошо выполненный ремонт. Думал, выйдет дороже. Рекомендую! С уважением Алексей Николаевич.<br><br>АЛЕКСЕЙ Р.
				</div>
				<div class="item">
					Всем службам и руководству компании «ARTTEH» выражаем искреннею благодарность за добросовестное и своевременное решение и выполнение всех ремонтных работ нашей трешки. Ремонт выполнен отлично, желаем компании дальнейших успехов! Всем рекомендуем!<br><br>АЛЕКСАНДР И ОКСАНА
				</div>
				<div class="item">
					Благодарю компанию ООО «ARTTES» за отлично выполненный ремонт моей 2х-комнатной квартиры. Все работы были выполнены качественно и в срок. Очень хорошо работала служба снабжения строительного материала, контроль со стороны прораба, который вел мою квартиру. Желаю удачи и клиентов.<br><br>РОМАН А.
				</div>
				<div class="item">
					Очень довольны сотрудничеству с Компанией «ARTTEH».  Все ремонтно-отделочные работы были выполнены очень хорошо. Отдельно хотели выразить благодарность дизайнерам, которые сумели осуществить наши мечты по оформлению интерьера. Благодарим и желаем творческих и ремонтных успехов.<br><br>ЮРИЙ Н.
				</div>
			</div>
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
</html>
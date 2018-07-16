<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/profile.css">
</head>
<body>
	<div class="categoriesWrap">
		<div class="categories">
			<button id="btn1" class="categoriesBtn categoriesBtnActive"  data-type="a">ВСЕ</button>
			<button id="btn2" class="categoriesBtn" data-type="q">КВАРТИРЫ</button>
			<button id="btn3" class="categoriesBtn" data-type="c">КОТТЕДЖИ</button>
			<button id="btn4" class="categoriesBtn" data-type="o">ДРУГИЕ ПРОЕКТЫ</button>
			<button id="btn5" class="categoriesBtn" data-type="h">ДОМА</button>
		</div>
	</div>
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
	<div class="head container-fluid" style="background-image:none; background-color:#292929;">
		<span class="headTitle">ПОРТФОЛИО</span><br><br><br>
		<a href="index.php" class="headLink">ГЛАВНАЯ СТРАНИЦА</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ПОРТФОЛИО</b>
	</div>
	<div class="blockLine">
		<div id="block1" class="block" style="background-image:url('img/profile1/preview.png');">
			<a href="example.php?id=1" style="text-decoration:none;"><div id="in1" data-type="q" class="blockInner in"><div class="blockTitle inTitle">РЕФОРМ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block2" class="block" style="background-image:url('img/profile2/preview.jpg');">
			<a href="example.php?id=2" style="text-decoration:none;"><div id="in2" data-type="q" class="blockInner in"><div class="blockTitle inTitle">НАСЛЕДИЕ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block3" class="block" style="background-image:url('img/profile3/preview.jpg');">
			<a href="example.php?id=3" style="text-decoration:none;"><div id="in3" data-type="q" class="blockInner in"><div class="blockTitle inTitle">НЕКРАСОВКА</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block4" class="block" style="background-image:url('img/profile4/preview.jpg');">
			<a href="example.php?id=4" style="text-decoration:none;"><div id="in4" data-type="q" class="blockInner in"><div class="blockTitle inTitle">НАСЛЕДИЕ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
	</div>
	<div class="blockLine">
		<div id="block5" class="block" style="background-image:url('img/profile5/preview.jpg');">
			<a href="example.php?id=5" style="text-decoration:none;"><div id="in5" data-type="q" class="blockInner in"><div class="blockTitle inTitle">РЕФОРМ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block6" class="block" style="background-image:url('img/profile6/preview.jpg');">
			<a href="example.php?id=6" style="text-decoration:none;"><div id="in6" data-type="q" class="blockInner in"><div class="blockTitle inTitle">РУЕТОВ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block7" class="block" style="background-image:url('img/profile7/preview.jpeg');">
			<a href="example.php?id=7" style="text-decoration:none;"><div id="in7" data-type="c" class="blockInner in"><div class="blockTitle inTitle">ДОЛЬЧЕ ВИТА</div><div class="blockPretitle inPretitle">КОТТЕДЖ</div></div></a>
		</div>
		<div id="block8" class="block" style="background-image:url('img/profile8/preview.jpg');">
			<a href="example.php?id=8" style="text-decoration:none;"><div id="in8" data-type="o" class="blockInner in"><div class="blockTitle inTitle">ПИЦЦЕРИЯ</div><div class="blockPretitle inPretitle">ДРУГИЕ ПРОЕКТЫ</div></div></a>
		</div>
	</div>
	<div class="blockLine">
		<div id="block9" class="block" style="background-image:url('img/profile9/preview.jpeg');">
			<a href="example.php?id=9" style="text-decoration:none;"><div id="in9" data-type="q" class="blockInner in"><div class="blockTitle inTitle">НА НАГОРНОЙ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block10" class="block" style="background-image:url('img/profile10/preview.jpeg');">
			<a href="example.php?id=10" style="text-decoration:none;"><div id="in10" data-type="q" class="blockInner in"><div class="blockTitle inTitle">НА НАГОРНОЙ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block11" class="block" style="background-image:url('img/profile11/preview.jpg');">
			<a href="example.php?id=11" style="text-decoration:none;"><div id="in11" data-type="q" class="blockInner in"><div class="blockTitle inTitle">САМОЦВЕТЫ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block12" class="block" style="background-image:url('img/profile12/preview.jpg');">
			<a href="example.php?id=12" style="text-decoration:none;"><div id="in12" data-type="q" class="blockInner in"><div class="blockTitle inTitle">САМОЦВЕТЫ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
	</div>
	<div class="blockLine">
		<div id="block13" class="block" style="background-image:url('img/profile13/preview.jpg');">
			<a href="example.php?id=13" style="text-decoration:none;"><div id="in13" data-type="q" class="blockInner in"><div class="blockTitle inTitle">АЛЬБАТРОС</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block14" class="block" style="background-image:url('img/profile14/preview.jpg');">
			<a href="example.php?id=14" style="text-decoration:none;"><div id="in14" data-type="q" class="blockInner in"><div class="blockTitle inTitle">РУЕТОВ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block15" class="block" style="background-image:url('img/profile15/preview.jpg');">
			<a href="example.php?id=15" style="text-decoration:none;"><div id="in15" data-type="q" class="blockInner in"><div class="blockTitle inTitle">САМОЦВЕТЫ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
		<div id="block16" class="block" style="background-image:url('img/profile18/preview.jpg');">
			<a href="example.php?id=18" style="text-decoration:none;"><div id="in16" data-type="q" class="blockInner in"><div class="blockTitle inTitle">САМОЦВЕТЫ</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
		</div>
	</div>
	<div class="blockLine">
		<div id="block17" class="block" style="background-image:url('img/profile20/preview.jpg');">
			<a href="example.php?id=20" style="text-decoration:none;"><div id="in17" data-type="q" class="blockInner in"><div class="blockTitle inTitle">LIFE</div><div class="blockPretitle inPretitle">КВАРТИРА</div></div></a>
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

			if (window.pageYOffset<270) {
				$('.categoriesWrap').css({
					'position': 'absolute',
					'top': '350px'
				});
			} else {
				$('.categoriesWrap').css({
					'position': 'fixed',
					'top': '80px'
				});
			}
		});
		$(window).resize(function () {
			$('.block').css('height', Number($('.block').css('width').replace('px',''))*(2/3));
		});
		$('.categoriesBtn').click(function (e) {
			$('.categoriesBtn').each(function (i, o) {
				$('#'+o.id).removeClass('categoriesBtnActive');
				$('#'+o.id).css('padding', '5px 25px');
			});
			$('#'+e.target.id).addClass('categoriesBtnActive');
			$('#'+e.target.id).css('padding', '5px 23px');
			$('.in').each(function(i, o) {
				if ($('#'+e.target.id).attr('data-type')!='a') {
					if ($('#'+e.target.id).attr('data-type')==$('#'+o.id).attr('data-type')) {
						$('#'+o.id).removeClass('blockInnerDisable');
						$('#'+o.id).addClass('blockInner');
						$('#'+o.id+'>.inTitle').removeClass('blockTitleDisable');
						$('#'+o.id+'>.inTitle').addClass('blockTitle');
						$('#'+o.id+'>.inPretitle').removeClass('blockPretitleDisable');
						$('#'+o.id+'>.inPretitle').addClass('blockPretitle');
					} else {
						$('#'+o.id).removeClass('blockInner');
						$('#'+o.id).addClass('blockInnerDisable');
						$('#'+o.id+'>.inTitle').removeClass('blockTitle');
						$('#'+o.id+'>.inTitle').addClass('blockTitleDisable');
						$('#'+o.id+'>.inPretitle').removeClass('blockPretitle');
						$('#'+o.id+'>.inPretitle').addClass('blockPretitleDisable');
					}
				} else {
					$('#'+o.id).removeClass('blockInnerDisable');
					$('#'+o.id).addClass('blockInner');
					$('#'+o.id+'>.inTitle').removeClass('blockTitleDisable');
					$('#'+o.id+'>.inTitle').addClass('blockTitle');
					$('#'+o.id+'>.inPretitle').removeClass('blockPretitleDisable');
					$('#'+o.id+'>.inPretitle').addClass('blockPretitle');
				}
			});
		});
		$(window).trigger('resize');
		var i=1;
		var blockAnimate = function () {
			$('#block'+i).animate({
				top:'0px',
				opacity:'1'
			}, 150, function () {
				if (++i<22) {blockAnimate();}
			});
		}
		blockAnimate();
	</script>
</body>
</html>
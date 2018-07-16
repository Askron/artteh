<!doctype html>
<html>
<head>
	<title>Арттех</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/example.css">
</head>
<?php 
$host = 'localhost';
$database = 'id2843834_artteh';
$user = 'id2843834_mysql';
$password = 'mysql';

$link = mysqli_connect($host, $user, $password, $database) or die("connection error: " . mysqli_error($link));

$query="SELECT * FROM profile WHERE id=".htmlspecialchars($_GET["id"]);
$result = mysqli_query($link, $query) or die("select error: " . mysqli_error($link));
$row = mysqli_fetch_row($result);
mysqli_close($link);
?>
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
	<div class="head container-fluid" style="color:black; background-image:none; background-color:#ccc;">
		<span class="headTitle" style="text-transform:uppercase;"><?php echo $row[1] ?></span><br><br><br>
		<a href="index.php" class="headLink">ГЛАВНАЯ СТРАНИЦА</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="profile.php" class="headLink">ПОРТФОЛИО</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b style="text-transform:uppercase;"><?php echo $row[1] ?></b>
	</div>
	<div class="describe">
		<span class="describeType" style="text-transform:uppercase;"><?php echo $row[2] ?></span><br><br><br>
		<span class="describeOthers"><b>Ремонт: </b><?php echo $row[3] ?><br><b>Площадь: </b><?php echo $row[4] ?><br><b>Сроки: </b><?php echo $row[5] ?></span>
	</div>
	<div class="blockLine">
		<?php include 'examples/example'.$_GET["id"].'.php' ?>
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
		$(window).resize(function () {
			$('.block').css('height', Number($('.block').css('width').replace('px',''))*(0.7508));
		});
		$(window).trigger('resize');
	</script>
</body>
<?php include 'examples/example'.$_GET["id"].'zoom.php' ?>
</html>
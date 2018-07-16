<?php
	$name=$_POST['name'];
	$phone=$_POST['phone'];

	$name=htmlspecialchars($name);
	$phone=htmlspecialchars($phone);

	$name=urldecode($name);
	$phone=urldecode($phone);

	$name=trim($name);
	$phone=trim($phone);

	mail("artteh63@yandex.ru", "Заявка от клиента с сайта Artteh", "Имя: ".$name.".\nТелефон: ".$phone, "From: artteh63@yandex.ru");
	header('Refresh: 1; URL='.$_SERVER['HTTP_REFERER']);
?>
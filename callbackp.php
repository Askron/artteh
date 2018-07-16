<?php
	$phone=$_POST['phone'];

	$phone=htmlspecialchars($phone);

	$phone=urldecode($phone);

	$phone=trim($phone);

	mail("artteh63@yandex.ru", "Заявка от клиента с сайта Artteh", "Телефон: ".$phone, "From: artteh63@yandex.ru");
	header('Refresh: 1; URL='.$_SERVER['HTTP_REFERER']);
?>
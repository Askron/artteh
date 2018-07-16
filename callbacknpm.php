<?php
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$text=$_POST['text'];

	$name=htmlspecialchars($name);
	$phone=htmlspecialchars($phone);
	$text=htmlspecialchars($text);

	$name=urldecode($name);
	$phone=urldecode($phone);
	$text=urldecode($text);

	$name=trim($name);
	$phone=trim($phone);
	$text=trim($text);

	mail("artteh63@yandex.ru", "Заявка от клиента с сайта Artteh", "Имя: ".$name.".\nТелефон: ".$phone.".\nТекст сообщения: ".$text, "From: artteh63@yandex.ru");
	header('Refresh: 1; URL='.$_SERVER['HTTP_REFERER']);
?>
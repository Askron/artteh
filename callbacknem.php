<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$text=$_POST['text'];

	$name=htmlspecialchars($name);
	$email=htmlspecialchars($email);
	$text=htmlspecialchars($text);

	$name=urldecode($name);
	$email=urldecode($email);
	$text=urldecode($text);

	$name=trim($name);
	$email=trim($email);
	$text=trim($text);

	mail("artteh63@yandex.ru", "Заявка от клиента с сайта Kamet", "Имя: ".$name.".\nПочта: ".$email.".\nТекст сообщения: ".$text, "From: ".$name);
	header('Refresh: 1; URL='.$_SERVER['HTTP_REFERER']);
?>
<?php

if (isset($_POST['submit'])) {
	$message = $_POST['message'];

	$mailTo = "adderallxdr@yandex.ru";
	$txt = "Вы получили письмо:" ".\n\n";

	mail($mailTo, $message);
	header('Location: index.php?mailsend');
}
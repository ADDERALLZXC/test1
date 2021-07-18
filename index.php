<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex">
	<title>Document</title>
	<link rel="stylesheet" href="dropzone-5.7.0/dist/dropzone.css">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
	<h1>нет бумаги? грязно?</h1>
	<form action="/file-upload" class="dropzone" id="my-awesome-dropzone" method="post" action="contact.php" name="message">
	<button class="button" type="submit">Сообщить</button>
	</form>
</header>
<script src="dropzone-5.7.0/dist/dropzone.js"></script>
</body>
</html>
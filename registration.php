<html>
	<head>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
	<p class = "title">Введите данные для регистрации
	<a class='linkOther'  href=index.php>На главную</a>
		<form action="save_registration.php" id="registerform" method="post"name="registerform">
			<p class='descriptoinBook'>Имя<br>
			<input name="name" type="text" value=""></p>
			<p class='descriptoinBook'>фамилия<br>
			<input name="surename" type="text" value=""></p>
			<p class='descriptoinBook'>E-mail<br>
			<input name="e_mail" type="text" value=""></p>
			<p class='descriptoinBook'>Логин<br>
			<input name="login" type="text" value=""></p>
			<p class='descriptoinBook'>Пароль<br>
			<input name="password" type="password" value=""></label></p>
			<p><input name="register" name= "register" type="submit" style="margin-left:35px;" value="Зарегистрироваться"></p>
			<p class="quote" style="margin-left:35px;">Уже зарегистрированы? <a href= "enter.php"  class="linkBook">Введите имя пользователя</a>!</p>
			
		</body>
	</html>			
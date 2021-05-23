<html> 
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
	<p class = "title">Введите данные для входа
	<a class='linkOther'  href=index.php>На главную</a>
			<form class="form" action="save_enter.php" method=POST>
			<p class='descriptoinBook'>Введите свой логин<br>
				<input type="text" placeholder="login" name="login"/>
				<p class='descriptoinBook'>Введите свой пароль<br>
				<input type="password" placeholder="password" name="password"/></p>
				<button type="submit" style="margin-left:35px;">login</button>
				<p class="quote" style="margin-left:35px;">Нет аккаунта?<a href="registration.php" class="linkBook">Зарегистрируйтесь!</a></p>
			</form>
	</body>
</html>
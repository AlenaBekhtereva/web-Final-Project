<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<p class = 'titleSmall'>Чтобы добавить автора, заполните следующие поля
			<a class='linkOther'  href=index.php>На главную</a>
		<a class='linkOther'  href=admin.php>Назад</a></p>
		<form action="save_author.php" id="author" method="post" name="author">
			<p class='descriptoinBook'>Введите имя автора<br>
				<input name="name" type="text" value=""></p>
			<p class='descriptoinBook'>Введите биографию автора<br>
			<input name="biography" type="text" value=""></p>
			<p class='descriptoinBook'>Выберите период, в котором жил данный автор<br>
				<select name=id_period>
					<option name=1 value="1">Древнерусская литература</option>
					<option name=2 value="2">Литература 18-го века</option>
					<option name=3 value="3">Литература первой половины 19 века</option>
					<option name=4 value="4">Литература второй половины 19 века</option>
					<option name=5 value="5">Литература конца 19 - начала 20 века</option>
					<option name=6 value="6">Литература первой половины 20 века</option>
					<option name=7 value="7">Литература второй половины 20 века</option>
				</select><br/>
				<p class='descriptoinBook'><input name="add" type="submit" value="Добавить"></p>
			</form>
		</body>
	</html>	
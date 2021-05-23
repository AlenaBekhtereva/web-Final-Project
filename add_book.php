<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<p class = 'titleSmall'>Чтобы добавить книгу, заполните следующие поля
			<a class='linkOther'  href=index.php>На главную</a>
		<a class='linkOther'  href=admin.php>Назад</a></p>
		<form action="save_book.php" id="book" method="post" name="book">
			<p class='descriptoinBook'>Введите название книги<br>
				<input name="name" type="text" value=""></p>
			<p class='descriptoinBook'>Введите описание книги<br>
			<input name="descriptoin" type="text" value=""></p>
			<p class='descriptoinBook'>Выберите период, в котором была написана книга<br>
				<select name='id_period'>
					<option name=1 value="1">Древнерусская литература</option>
					<option name=2 value="2">Литература 18-го века</option>
					<option name=3 value="3">Литература первой половины 19 века</option>
					<option name=4 value="4">Литература второй половины 19 века</option>
					<option name=5 value="5">Литература конца 19 - начала 20 века</option>
					<option name=6 value="6">Литература первой половины 20 века</option>
					<option name=7 value="7">Литература второй половины 20 века</option>
				</select></p>
				<p class='descriptoinBook'>Выберите автора книги<br>
					<?php
						echo "<select name='id_author'>";
						
							require_once "base.php";
							$link = connect();
							$mas=get_all_author($link);
							foreach($mas as $key){
								echo '<option name="' . $key[0] . '" value="' . $key[0] . '">' . $key[1];
							}
						
					echo "</select><br/>";
					?>
					<p class='descriptoinBook'><input name="add" type="submit" value="Добавить"></p>
				</form>
		</body>
	</html>							
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<p class = 'titleSmall'>Чтобы добавить персонажа, заполните следующие поля
		<a class='linkOther'  href=index.php>На главную</a>
		<a class='linkOther'  href=admin.php>Назад</a></p>
		<form action="save_character.php" id="character" method="post" name="character">
			<p class='descriptoinBook'>Введите имя персонажа<br>
			<input name="name" type="text" value=""></p>
			
			<p class='descriptoinBook'>Выберите книгу, в которой был этот персонаж<br>
				<select name='id_book'>
					<?php
						require_once "base.php";
						$link = connect();
						$mas=get_all_book_name($link);
						foreach($mas as $key){
							echo '<option name="' . $key[0] . '" value="' . $key[0] . '">' . $key[1];
						}
					?>
				</select><br/>
			</p>
			
			<p class='descriptoinBook'>Портрет персонажа<br>
			<input name="portrait" type="text" value=""></p>
			
			<p class='descriptoinBook'>Другие персонажи о нем<br>
			<input name="othersAboutCharacter" type="text" value=""></p>
			
			<p class='descriptoinBook'>Любовь в жизни персонажа<br>
			<input name="love" type="text" value=""></p>
			
			<p class='descriptoinBook'>Судьба персонажа<br>
			<input name="fate" type="text" value=""></p>
			
			<p class='descriptoinBook'>Роль в книге<br>
			<input name="roleInBook" type="text" value=""></p>
			
			<p class='descriptoinBook'>Отношение автора к этому персонажу<br>
			<input name="authorsAttitude" type="text" value=""></p>
			
			<p class='descriptoinBook'>Прототип персонажа<br>
			<input name="prototype" type="text" value=""></p>
			
			<p class='descriptoinBook'><input name="add" type="submit" value="Добавить"></p>
		</form>
	</body>
</html>							
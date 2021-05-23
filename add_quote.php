<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<p class = 'titleSmall'>Чтобы добавить цитату, заполните следующие поля
			<a class='linkOther'  href=index.php>На главную</a>
		<a class='linkOther'  href=admin.php>Назад</a></p>
		<form action="save_quote.php" id="author" method="post" name="author">
			<p class='descriptoinBook'>Введите текст цитаты<br>
			<input name="text" type="text" value=""></p>
		
		<p class='descriptoinBook'>Выберите персонажа, который сказал цитату<br>
			<?php
				echo "<select name='id_character'>";
				
				require_once "base.php";
				$link = connect();
				$mas=get_all_character($link);
				foreach($mas as $key){
					echo '<option name="' . $key[0] . '" value="' . $key[0] . '">' . $key[1];
				}
				
				echo "</select><br/>";
			?>
		</p>
		<p class='descriptoinBook'>Выберите книгу, откуда эта цитата<br>
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
		<p class='descriptoinBook'>Выберите проблему, затронутую в этой цитате<br>
			<select name='id_problem'>
				<?php
					require_once "base.php";
					$link = connect();
					$mas=get_all_problem($link);
					foreach($mas as $key){
						echo '<option name="' . $key[0] . '" value="' . $key[0] . '">' . $key[1];
						}
				?>
			</select><br/>
		</p>
		<p class='descriptoinBook'><input name="add" type="submit" value="Добавить"></p>
		</form>
	</body>
</html>	
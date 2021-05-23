<html>
<head>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body bgcolor="#423126">
<p class="title">Цитаты
<a class='linkOther'  href=index.php>На главную</a></p>
<?php
			
			require_once "base.php";
			
			$link = connect();
			
			$mas = get_all_problem($link);
			foreach($mas as $key){
				echo "<p class='titleSmall'>$key[1]</p>" . "</br>";	
				$masBook = get_all_quotes_by_problem($link,$key[0]);
				if($masBook){
					foreach($masBook as $keyBook){
						echo '<p class=quote>"' . $keyBook[1] . '" ';
						$character_id=get_id_character_by_quote($link,$keyBook[0]);
						$character = get_character_name_by_id($link,$character_id);
						echo "<a class='linkBook' href=character.php?id=$character_id>$character</a>" . "</br>";
					}
				}else{
				echo "<p class=quote>Пока отсутствуют.</p>";
				}
			}
			
		?>
</body>
</html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<div>
			<p class="title">Книги
			<a class='linkOther'  href=index.php>На главную</a></p>
			<?php
				
				require_once "base.php";
				
				$link = connect();
				
				$mas = get_all_period($link);
				foreach($mas as $key){
					echo "<p class='titleSmall'>$key[1]</p>" . "</br>";	
					$masBook = get_all_book_by_period($link,$key[0]);
					if($masBook){
						foreach($masBook as $keyBook){
							echo "<a class='linkBook' href=book.php?id=$keyBook[0]>$keyBook[1]</a>" . "</br>";
						}
						}else{
						echo "<p class=quote>Пока отсутствуют.</p>";
					}
				}
				
			?>
		</body>
	</html>	
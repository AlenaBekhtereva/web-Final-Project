<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<p class="title">Темы
<a class='linkOther'  href=index.php>На главную</a></p>
		
		<?php
			
			require_once "base.php";
			
			$link = connect();
			
			$mas = get_all_problem($link);
			foreach($mas as $key){
				echo "<p class='titleSmall'>$key[1]</p>" . "</br>";	
				$masBook = get_all_problems_in_book_by_problem($link,$key[0]);
				if($masBook){
					foreach($masBook as $keyBook){
						$mas1= get_information_for_book($link, $keyBook);
						echo "<a class='linkBook' href=book.php?id=$keyBook>$mas1[0]</a>" . "</br>";
					}
				}else{
					echo "<p class=quote>Пока отсутствуют.</p>";
				}
			}
			
		?>
	</body>
</html>
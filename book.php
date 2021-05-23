<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		<?php
			require_once "base.php";
			$link = connect();
			$id = $_GET["id"];
			$mas = get_information_for_book($link, $id);
			echo "<p class='title'> $mas[0]
			<a class='linkOther'  href=index.php>На главную</a>";
			if($mas[2]){
			echo "<a class='linkOther'  href=author.php?id=$mas[2]>К автору</a>";
			}
			echo " <a class='linkOther'  href=all_book.php>Ко всем книгам</a>
			<a class='linkOther'  href=all_problem.php>Ко всем темам</a></p>";
			
		?>
		
		<div class="boxDecriptionBook">
			<?php
				require_once "base.php";
				$link = connect();
				$id = $_GET["id"];
				$mas = get_information_for_book($link, $id);
				echo "<p class='descriptoinBook'>$mas[1]</p>" ;
				echo  "<p  class='titleSmall'>Проблемы, которые поднимаются в этой книге:</p>";
				
				$masProblem =  get_all_problems_by_book($link, $id);
				if($masProblem){
			foreach($masProblem as $keyProblem){
			echo "<p  class='titleSmall'>" . get_problem_name_by_id($link, $keyProblem) . "</p>";
			$mas1=get_all_problems_in_book_by_book_and_problem($link, $id,$keyProblem);
			foreach($mas1 as $key1){
				echo "<p  class='descriptoinBook'>" .  $key1 . "</p>";
			}
			}
				}else{
					echo "<p class=quote>Пока отсутствуют.</p>";
				}
			?>
		</div>
		<div class="boxCharacterBook">
			
			<p class='headlines'>Персонажи:</p>
			<?php
				require_once "base.php";
				$link = connect();
				$id = $_GET["id"];
				$masBook = get_all_character_by_book($link, $id);
				if($masBook){
					foreach($masBook as $keyBook){
						echo "<a class='linkBook' href=character.php?id=$keyBook[0]>$keyBook[1]</a>" . "</br>";
					}
					}else{
					echo "<p class=quote>Пока отсутствуют.</p>";
				}
			?>
		</div>
		
		
		
	</body>
</html>

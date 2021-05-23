<?php
	session_start();
	require_once "base.php";
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styleIndex.css">
	</head>
	<body bgcolor="#423126">
		
		<div>
			<div>
				<p class="title">Литературый справочник
					<?php
						if($_SESSION["login"]){
							echo '<a class="linkOther"  href=exit.php>Выход</a>';
							echo '<a class="linkOther"  href=admin.php>Редактировать сайт </a>';
							echo '<font class = descriptoinBook style="float: right;">Вы вошли под логином ' . $_SESSION["login"] . '</font>';
							}else{
							echo '<a class="linkOther"  href=enter.php>Вход</a>';
							echo "<a class='linkOther'  href=registration.php>Регистрация</a>";
						}
					?>
					
				</div>
				<img class="photoIndex" src="book.jpg" alt="" />
				
				<div class="boxIndexOveral">
					
					<div class="boxIndexForText">
					<img src="pencil.png" class="iconIndex" alt=""/>
					<a href="all_author.php" class="linkIndex">Писатели</a>
				<p class="descriptoin" >Биографии Писателей - сборник повествований о жизни выдающихся авторов мировой литературы.</p>
				</div>
				
				<div class="boxIndexForText">
					<img src="pin.png" class="iconIndex" alt=""/>
					<a href="all_problem.php" class="linkIndex">Темы</a>
					<p class="descriptoin" >Параллельность Тем - блок посвящен поиску схожих тем в литературе.</p>
				</div>
				
				<div  class="boxIndexForText">
					<img src="bookshelf.png" class="iconIndex" alt=""/>
					<a href="all_book.php" class="linkIndex">Книги</a>
					<p class="descriptoin" >В данном блоке:</br>Характеристики Героев - свыше тысячи героев художественной литературы и их описание.</br>Анализ Произведени - полный разбор всех произведений школьной литературы.
					</div>
					
					<div class="boxIndexForText">
						<img src="quote.png" class="iconIndex" alt=""/>
						<a href="all_quotes.php" class="linkIndex">Цитаты</a>
						<p class="descriptoin" >В блоке представлены цитаты, полезные для написания сочинений</p>
					</div>
					
				</div>
				
				</div>
				
			</body>
		</html>		
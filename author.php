<html>
<head>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body bgcolor="#423126">
<?php
require_once "base.php";
$link = connect();
$id = $_GET["id"];
$mas = get_information_for_author($link, $id);
echo "<p class='title'> $mas[0]
<a class='linkOther'  href=index.php> На главную</a>
<a class='linkOther'  href=all_author.php> Ко всем авторам</a></p>";

?>

<div class="boxDecriptionBook">
<?php
require_once "base.php";
$link = connect();
$id = $_GET["id"];
$mas = get_information_for_author($link, $id);
echo "<p class='descriptoinBook'>$mas[1]</p>" . '</br>';

?>
</div>
<div class="boxCharacterBook">
<p class='headlines'>Книги этого писателя:</p>
	<?php
	require_once "base.php";
	$link = connect();
	$id = $_GET["id"];
	$masBook = get_all_book_by_author($link,$id);
	if($masBook){
	foreach($masBook as $keyBook){
		echo "<a class='linkBook' href=book.php?id=$keyBook[0]>$keyBook[1]</a>" . "</br>";
	}
	}else{
				echo "<p class=quote>Пока отсутствуют.</p>";
				}
	?>
	</div>
</body>
</html>
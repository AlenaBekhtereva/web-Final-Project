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
echo "<p class='title'> $mas[0]</p>" . '</br>';

?>

<div class="boxDecriptionBook">
<?php
require_once "base.php";
$link = connect();
$id = $_GET["id"];
$mas = get_information_for_book($link, $id);
echo "<p class='descriptoinBook'>$mas[1]</p>" . '</br>';

?>
</div>

<div class="boxCharacterBook">
<?php
	require_once "base.php";
	$link = connect();
	$id = $_GET["id"];
	$masBook = get_all_character_by_book($link, $id);
	foreach($masBook as $keyBook){
		echo "<a class='linkBook' href=book.php?id=$keyBook[0]>$keyBook[1]</a>" . "</br>";
	}
	?>
</div>

</body>
</html>

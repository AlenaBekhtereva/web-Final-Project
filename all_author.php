<html>
<head>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body bgcolor="#423126">
<p class="title">Писатели
<a class='linkOther'  href=index.php>На главную</a></p>
<div class="boxDecriptionBook">
<?php

require_once "base.php";

$link = connect();

$mas = get_all_period($link);
foreach($mas as $key){
$masBook = get_all_author_by_period($link,$key[0]);
if($masBook){
	echo "<p class='titleSmall'>$key[1]</p>" . "</br>";	
	
	foreach($masBook as $keyBook){
		echo "<a class='linkBook' href=author.php?id=$keyBook[0]>$keyBook[1]</a>" . "</br>";
	}
}
}

?>
</div>
</body>
</html>
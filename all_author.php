<html>
<head>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
</head>
<body bgcolor="#423126">
<p class="title">Писатели</p>
<?php

require_once "base.php";

$link = connect();

$mas = get_all_period($link);
foreach($mas as $key){
	echo "<p class='titleSmall'>$key[1]</p>" . "</br>";	
	$masBook = get_all_author_by_period($link,$key[0]);
	foreach($masBook as $keyBook){
		echo "<a class='linkBook' href=author.php?id=$keyBook[0]>$keyBook[1]</a>" . "</br>";
	}
}

?>
</body>
</html>
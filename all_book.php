<html>
<head>
</head>
<body>
<?php

require_once "base.php";

$link = connect();

$mas = get_all_book_name($link);
foreach($mas as $key){
	$name = str_replace(" ", "_",$key);
	echo "<a href=book.php?name=$name>$key</a>" . "</br>";
}	
?>


</body>
</html>
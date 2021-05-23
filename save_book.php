<?php
	header('Location: index.php');
	require_once "base.php";
	$link = connect();
	add_book($link, $_POST["name"], $_POST["descriptoin"], $_POST["id_period"], $_POST["id_author"]);
	?>
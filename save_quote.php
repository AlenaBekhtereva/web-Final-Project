<?php
	header('Location: index.php');
	require_once "base.php";
	$link = connect();
	add_quote($link, $_POST["text"], $_POST["id_character"], $_POST["id_problem"], $_POST["id_book"]);
	?>
<?php
	header('Location: index.php');
	require_once "base.php";
	$link = connect();
	add_author($link, $_POST["name"], $_POST["biography"], $_POST["id_period"]);
	?>
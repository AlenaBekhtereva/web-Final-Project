<?php
	header('Location: index.php');
	require_once "base.php";
	$link = connect();
	add_character($link, $_POST["name"], $_POST["portrait"], $_POST["othersAboutCharacter"], $_POST["love"], $_POST["fate"], $_POST["roleInBook"], $_POST["authorsAttitude"], $_POST["prototype"], $_POST["id_book"]);
	?>
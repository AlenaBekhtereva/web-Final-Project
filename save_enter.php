<?php
	header('Location: index.php');
	session_start();
	require "base.php";
	$login = $_POST["login"];
	$password = $_POST["password"];
	$_SESSION["login"] = $login;
	$_SESSION["password"] = $password;
?>
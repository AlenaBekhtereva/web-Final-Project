<?php
	header('Location: index.php');
	session_start();
	require "base.php";
	$login = $_POST["login"];
	$link = connect();
	$pas= get_user_password_by__login($link, $login);
	$password = $_POST["password"];
	if($password==$pas){
	$_SESSION["login"] = $login;
	$_SESSION["password"] = $password;
	}else{
	$_SESSION["error"]=1;
	}
?>
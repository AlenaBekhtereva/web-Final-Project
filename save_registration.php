<?php
	header('Location: index.php');
	session_start();
	require_once "base.php";
	$link = connect();
	$name = $_POST["name"];
	$surename = $_POST["surename"];
	$e_mail = $_POST["e_mail"];
	$login = $_POST["login"];
	$password = $_POST["password"];
	$mas=get_all_user_login($link);
	$check=true;
	
	
	if($mas){
		foreach($mas as $key){
			if ($login==$key){
				$check=false;
			}
		}
	}
	if($check==true){
		add_user($link, $name,$surename,$login,$password,$e_mail);
		$id_user=get_user_id_by__login($link, $login);
		if($_POST["login"] != ""){
			$_SESSION["id_user"] = $id_user["id_user"];
			$_SESSION["login"] = $login;
			$_SESSION["name"] = $name;
		}
	}else{
	$_SESSION["error"]=2;
	}
	
?>
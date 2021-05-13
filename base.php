<?php 
	function connect(){
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db_name = 'literaturegide';
		return mysqli_connect($host, $user, $password, $db_name);
	}
	
	function get_all_book_name($link){
		$sql = "SELECT id_book, name FROM books";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_book"], $row['name']));
			}
			return $array;
		}
	}
	
	function get_information_for_book($link, $id){
		$sql = "SELECT name, description FROM books WHERE id_book = '$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				return array($row["name"], $row['description']);
			}
		}
		return false;
	}	
	
	function get_information_for_author($link, $id){
		$sql = "SELECT name, biography FROM authors WHERE id_author = '$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				return array($row["name"], $row['biography']);
			}
		}
		return false;
	}	
	
	function get_all_book_by_author($link, $id){
		$sql = "SELECT name, id_book FROM books WHERE id_author ='$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_book"], $row['name']));
			}
			return $array;
		}
		return false;
	}
	
	function get_all_problems_in_book_by_problem($link, $id){
		
		$sql = "SELECT id_book FROM problems_in_book WHERE id_problem ='$id'";
		$result = $link->query($sql);
		
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, $row["id_book"]);
			}
			return $array;
			
		}
		return false;
	}
	
	function get_all_period($link){
		$sql = "SELECT id_period, name FROM periods";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_period"], $row['name']));
			}
			return $array;
			
		}
	}
	
	function get_all_problem($link){
		$sql = "SELECT id_problem, name FROM problems";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_problem"], $row['name']));
			}
			return $array;
			
		}
	}
	
	function get_all_book_by_period($link,$id){
		$sql = "SELECT name, id_book FROM books WHERE id_period= '$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_book"], $row['name']));
			}
			return $array;
			
		}
	}
	
	function get_all_author_by_period($link,$id){
		$sql = "SELECT name, id_author FROM authors WHERE id_period= '$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_author"], $row['name']));
			}
			return $array;
			
		}
	}
	
	function get_all_character_by_book($link, $id){
		$sql = "SELECT name, id_character FROM character WHERE id_book ='$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_character"], $row['name']));
			}
			return $array;
			
		}
	}
	
	function get_all_author($link){
		$sql = "SELECT id_author, name FROM authors";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_author"], $row['name']));
			}
			return $array;
			
		}
	}
	
	function get_all_quotes_by_problem($link,$id){
		$sql = "SELECT id_quote, text_quote FROM quotes WHERE id_problem='$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				array_push($array, array($row["id_quote"], $row['text_quote']));
			}
			return $array;
		}
		return false;
	}
	
	function get_id_character_by_quote($link,$id){
		$sql = "SELECT id_character FROM quotes WHERE id_quote='$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				return $row["id_character"];
			}
		}
		return false;
	}
	
	function get_character_name_by_id($link,$id){
		$sql = "SELECT name FROM `character` WHERE id_character='$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				return $row["name"];
			}
		}
		return mysqli_error($link);	
	}
	
	function get_information_for_character($link, $id){
		$sql = "SELECT * FROM `character` WHERE id_character = '$id'";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
			$array = array();
			while($row = $result->fetch_assoc()) {
				return array($row["name"], $row['portrait'], $row['othersAboutCharacter'], $row['love'], $row['fate'], $row['roleInBook'], $row['authorsAttitude'], $row['prototype']);
			}
		}
		return false;
	}	
?>					
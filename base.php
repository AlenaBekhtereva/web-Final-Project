<?php 
		function connect(){
			$host = 'localhost';
			$user = 'root';
			$password = '';
			$db_name = 'literaturegide';
			return mysqli_connect($host, $user, $password, $db_name);
		}
		
		function get_all_book_name($link){
		$sql = "SELECT name FROM books";
		$result = $link->query($sql);
		if ($result->num_rows > 0) {
		  $array = array();
		  while($row = $result->fetch_assoc()) {
			array_push($array, $row["name"]);
		  }
		  return $array;
		}
		
		
	}
?>
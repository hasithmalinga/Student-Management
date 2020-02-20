<?php 

	include('config/db_connection.php');

	if (isset($_GET['id'])) {
		
		$id = mysqli_real_escape_string($conn, $_GET['id']);
		//build query
		$sql = "DELETE FROM students WHERE id = $id";
		//get query result
		mysqli_query($conn, $sql);
		mysqli_close($conn); 
	}

 ?>
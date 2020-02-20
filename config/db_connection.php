<?php 

	//connect to the database
	$conn = mysqli_connect('localhost', 'school', 'School123', 'school_management');

	//check connection
	if (!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}

 ?>
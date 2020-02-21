<?php 

	include('config/db_connection.php');

	if (isset($_GET['id'])) {
		
		$id = mysqli_real_escape_string($conn, $_GET['id']);
		//build query
		$sql = "SELECT * FROM students WHERE id = $id";
		//get query result
		$result = mysqli_query($conn, $sql);
		//fetch result in an array
		$student = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn); 

	}

 ?>

 <!DOCTYPE html>
 <html>
 	<?php include('templates/header.php'); ?>

 	<div class="container center white details-container">
 		<?php if ($student) { ?>
 			
 			<h4><?php echo htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?></h4>
 			<div class="ratio img-responsive img-circle">
 				<img src="images/<?php echo htmlspecialchars($student['image']) ?>">
 			</div>
 			<p><strong>Date of Birth: </strong> <?php echo htmlspecialchars($student['dob']); ?></p>
 			<p><strong>Date of Enrollment: </strong><?php echo htmlspecialchars($student['enrollment_date']); ?></p>
 			<p><strong>School Year: </strong><?php echo htmlspecialchars($student['year']); ?></p>
 			<p><strong>Home Phone: </strong><?php echo htmlspecialchars($student['home_phone']); ?></p>
 			<p><strong>Mobile: </strong><?php echo htmlspecialchars($student['mobile']); ?></p>
 			<p><strong>Email: </strong><?php echo htmlspecialchars($student['email']); ?></p>
 			<p><strong>First Contact Name: </strong><?php echo htmlspecialchars($student['contact_name_1']); ?></p>
 			<p><strong>First Contact Phone: </strong><?php echo htmlspecialchars($student['contact_phone_1']); ?></p>
 			<p><strong>Second Contact Name: </strong><?php echo htmlspecialchars($student['contact_name_2']); ?></p>
 			<p><strong>Second Contact Phone: </strong><?php echo htmlspecialchars($student['contact_phone_2']); ?></p>

 			<div class="row center"> 				
				<a class="waves-effect waves-light btn btn-student" href="register.php?id=<?php echo $student['id']; ?>"><i class="material-icons left">edit</i>Edit Student</a>
				<a class="waves-effect waves-light btn btn-student" href="#" onclick="delete_row(<?php echo $student['id']; ?>)">
					<i class="material-icons left">delete</i>Delete Student</a>					
 			</div>
 			
 		<?php } else { ?>

 			<h4>No Student Record Found !</h4>

 		<?php } ?>
 	</div>

 	<?php include('templates/footer.php'); ?>
 </html>
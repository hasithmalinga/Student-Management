<?php 

	include('config/db_connection.php');

	//retrieve all the students
	$sql = 'SELECT id,first_name,last_name,email,year FROM students ORDER BY year, first_name, last_name';

	$result = mysqli_query($conn, $sql);
	$students = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	mysqli_close($conn);

 ?>



<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>
	

	<div class="container table-container">
		<div class="row">
			<div class="col s6">
				<h4 class="left grey-text">Students List</h4>
			</div>
			<div class="col s6">
				<a class="waves-effect waves-light btn right btn-student" href="register.php"><i class="material-icons left">add</i>Add Student</a>
			</div>
		</div>
		<table class="centered striped white">
	        <thead>
	          <tr>
	              <th>Student Name</th>
	              <th>School Year</th>
	              <th>Email</th>
	              <th></th>
	              <th></th>
	              <th></th>
	          </tr>
	        </thead>

	        <tbody>
	          <?php foreach ($students as $student) { ?>         	
	          
		          <tr>
		            <td><?php echo htmlspecialchars($student['first_name'] . ' ' . $student['last_name']); ?></td>
		            <td><?php echo htmlspecialchars($student['year']); ?></td>
		            <td><a href="mailto:<?php echo htmlspecialchars($student['email']); ?>"><?php echo htmlspecialchars($student['email']); ?></a></td>
		            <td><a class="table-view" href="details.php?id=<?php echo $student['id']; ?>"><i class="small material-icons">visibility</i></a></td>
		            <td><a class="table-edit" href="register.php?id=<?php echo $student['id']; ?>"><i class="small material-icons">edit</i></a></td>
		            <td><a class="table-delete" onclick="delete_row(<?php echo $student['id']; ?>)"><i class="small material-icons">delete</i></a></td>
		          </tr>

	          <?php } ?>
	          
	    	</tbody>
	    </table>
	</div>

	<?php include('templates/footer.php'); ?>

</html>
<?php 

	//connect to the database
	$conn = mysqli_connect('localhost', 'school', 'School123', 'school_management');

	//check connection
	if (!$conn) {
		echo "Connection Error: " . mysqli_connect_error();
	}

	//retrieve all the students
	$sql = 'SELECT * FROM students ORDER BY year, first_name, last_name';

	$result = mysqli_query($conn, $sql);
	$students = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);
	mysqli_close($conn);

 ?>



<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	
	

	<div class="container">
		<div class="row">
			<div class="col s6">
				<h4 class="left grey-text">Students List</h4>
			</div>
			<div class="col s6">
				<a class="waves-effect waves-light btn right add-student"><i class="material-icons left">add</i>Add Student</a>
			</div>
		</div>
		<table class="centered striped white">
	        <thead>
	          <tr>
	              <th>First Name</th>
	              <th>Last Name Name</th>
	              <th>DoB</th>
	              <th>Enrollment Date</th>
	              <th>Year</th>
	              <th>Home Phone</th>
	              <th>Mobile</th>
	              <th>Email</th>
	              <th>1st Contact Name</th>
	              <th>1st Contact Phone</th>
	              <th>2nd Contact Name</th>
	              <th>2nd Contact Phone</th>
	              <th></th>
	              <th></th>
	          </tr>
	        </thead>

	        <tbody>
	          <?php foreach ($students as $student) { ?>         	
	          
		          <tr>
		            <td><?php echo htmlspecialchars($student['first_name']); ?></td>
		            <td><?php echo htmlspecialchars($student['last_name']); ?></td>
		            <td><?php echo htmlspecialchars($student['dob']); ?></td>
		            <td><?php echo htmlspecialchars($student['enrollment_date']); ?></td>
		            <td><?php echo htmlspecialchars($student['year']); ?></td>
		            <td><?php echo htmlspecialchars($student['home_phone']); ?></td>
		            <td><?php echo htmlspecialchars($student['mobile']); ?></td>
		            <td><?php echo htmlspecialchars($student['email']); ?></td>
		            <td><?php echo htmlspecialchars($student['contact_name_1']); ?></td>
		            <td><?php echo htmlspecialchars($student['contact_phone_1']); ?></td>
		            <td><?php echo htmlspecialchars($student['contact_name_2']); ?></td>
		            <td><?php echo htmlspecialchars($student['contact_phone_2']); ?></td>
		            <td><a class="table-edit" href="#"><i class="small material-icons">edit</i></a></td>
		            <td><a class="table-delete" href="#"><i class="small material-icons">delete</i></a></td>
		          </tr>

	          <?php } ?>
	          
	    	</tbody>
	    </table>
	</div>

	<?php include('templates/footer.php'); ?>

</html>
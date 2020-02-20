<?php 

	$first_name = $last_name = $dob = $enrollment_date = $email = $home_phone = $mobile = '';
	$contact_name_1 = $contact_phone_1 = $contact_name_2 = $contact_phone_2 = '';
	$year = 0;
	
	$errors = array('first_name' => '', 'last_name' => '', 'email' => '',  'dob' => '', 'enrollment_date' => '', 'year' => '',
				 'contact_name_1' => '', 'contact_name_2' => '', 'contact_phone_1' => '', 'contact_phone_2' => '',
				 'home_phone' => '', 'mobile' => '');
	
	if (isset($_POST['submit'])) {
		
		//check First Name
		if (empty($_POST['first_name'])) {
			$errors['first_name'] = 'Fist Name is required';
		}else{
			$first_name = $_POST['first_name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $first_name)){
				$errors['first_name'] = 'First Name must be letters and spaces only';
			}
		}

		//check Last Name
		if (empty($_POST['last_name'])) {
			$errors['last_name'] = 'Last Name is required';
		}else{
			$last_name = $_POST['last_name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $last_name)){
				$errors['last_name'] = 'Last Name must be letters and spaces only';
			}
		}

		//check Email
		if (empty($_POST['email'])) {
			$errors['email'] = 'Email is required';
		}else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be valid';
			}
		}

		//check DOB
		if (empty($_POST['dob'])) {
			$errors['dob'] = 'Date of Birth is required';
		}else{
			$dob = $_POST['dob'];			
		}

		//check Year
		if (empty($_POST['year'])) {
			$errors['year'] = 'Class Year is required';
		}else{
			$year = $_POST['year'];			
		}

		//check Enrollment Date
		if (empty($_POST['enrollment_date'])) {
			$errors['enrollment_date'] = 'Enrollment Date is required';
		}else{
			$enrollment_date = $_POST['enrollment_date'];			
		}

		//check Home Phone
		if (empty($_POST['home_phone'])) {
			$errors['home_phone'] = 'Home Phone is required';
		}else{
			$home_phone = $_POST['home_phone'];			
		}

		//check Mobile
		if (empty($_POST['mobile'])) {
			$errors['mobile'] = 'Mobile is required';
		}else{
			$mobile = $_POST['mobile'];			
		}

		//check First Contact Name
		if (empty($_POST['contact_name_1'])) {
			$errors['contact_name_1'] = 'First Contact Name is required';
		}else{
			$contact_name_1 = $_POST['contact_name_1'];			
		}

		//check First Contact Phone
		if (empty($_POST['contact_phone_1'])) {
			$errors['contact_phone_1'] = 'First Contact Phone is required';
		}else{
			$contact_phone_1 = $_POST['contact_phone_1'];			
		}

		//check Second Contact Name
		if (empty($_POST['contact_name_2'])) {
			$errors['contact_name_2'] = 'Second Contact Name is required';
		}else{
			$contact_name_2 = $_POST['contact_name_2'];			
		}

		//check Second Contact Phone
		if (empty($_POST['contact_phone_2'])) {
			$errors['contact_phone_2'] = 'Second Contact Phone is required';
		}else{
			$contact_phone_2 = $_POST['contact_phone_2'];			
		}


		if (!array_filter($errors)) {
			header('Location: index.php');
		}
	}

 ?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<section class="container grey-text register-form-container">
		<h4 class="center">Register New Student</h4>		
			<div class="row">
			    <form class="white col-s12 regiter-form" action="register.php" method="POST">
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="first_name" name="first_name" type="text" value="<?php echo htmlspecialchars($first_name); ?>" class="validate">
			          <label for="first_name">First Name</label>
			          <div class="red-text"><?php echo $errors['first_name']; ?></div>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" name="last_name" type="text" value="<?php echo htmlspecialchars($last_name); ?>" class="validate">
			          <label for="last_name">Last Name</label>
			          <div class="red-text"><?php echo $errors['last_name']; ?></div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s4">
			          <input id="dob" name="dob" type="date" class="validate">
			          <label for="dob">Date of Birth</label>
			          <div class="red-text"><?php echo $errors['dob']; ?></div>
			        </div>
			        <div class="input-field col s4">
			          <input id="enrollment_date" name="enrollment_date" type="date" class="validate">
			          <label for="enrollment_date">Date of Enrollment</label>
			          <div class="red-text"><?php echo $errors['enrollment_date']; ?></div>
			        </div>
			        <div class="input-field col s4">
			          <input id="year" name="year" type="number" value="<?php echo htmlspecialchars($year); ?>" class="validate">
			          <label for="year">Current School Year</label>
			          <div class="red-text"><?php echo $errors['year']; ?></div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="home_phone" name="home_phone" type="text" value="<?php echo htmlspecialchars($home_phone); ?>" class="validate">
			          <label for="home_phone">Home Phone</label>
			          <div class="red-text"><?php echo $errors['home_phone']; ?></div>
			        </div>
			        <div class="input-field col s6">
			          <input id="mobile" name="mobile" type="text" value="<?php echo htmlspecialchars($mobile); ?>" class="validate">
			          <label for="mobile">Mobile</label>
			          <div class="red-text"><?php echo $errors['mobile']; ?></div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($email); ?>" class="validate">
			          <label for="email">Email</label>
			          <div class="red-text"><?php echo $errors['email']; ?></div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="contact_name_1" name="contact_name_1" type="text" value="<?php echo htmlspecialchars($contact_name_1); ?>" class="validate">
			          <label for="contact_name_1">First Contact Name</label>
			          <div class="red-text"><?php echo $errors['contact_name_1']; ?></div>
			        </div>
			        <div class="input-field col s6">
			          <input id="contact_phone_1" name="contact_phone_1" type="text" value="<?php echo htmlspecialchars($contact_phone_1); ?>" class="validate">
			          <label for="contact_phone_1">First Contact Phone</label>
			          <div class="red-text"><?php echo $errors['contact_phone_1']; ?></div>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="contact_name_2" name="contact_name_2" type="text" value="<?php echo htmlspecialchars($contact_name_2); ?>" class="validate">
			          <label for="contact_name_2">Second Contact Name</label>
			          <div class="red-text"><?php echo $errors['contact_name_2']; ?></div>
			        </div>
			        <div class="input-field col s6">
			          <input id="contact_phone_2" name="contact_phone_2" type="text" value="<?php echo htmlspecialchars($contact_phone_2); ?>" class="validate">
			          <label for="contact_phone_2">Second Contact Phone</label>
			          <div class="red-text"><?php echo $errors['contact_phone_2']; ?></div>
			        </div>
			      </div>
			      <div class="row">
			      	<div class="input-field col s12">
			          <input name="submit" type="submit" value="submit" class="btn">
			        </div>
			      </div>
			    </form>
  			</div>
	</section>

	<?php include('templates/footer.php'); ?>

</html>
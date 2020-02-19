<?php 

	$errors = array('first_name' => '', 'last_name' => '', 'email' => '');
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
			          <input id="first_name" name="first_name" type="text" class="validate">
			          <label for="first_name">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" name="last_name" type="text" class="validate">
			          <label for="last_name">Last Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s4">
			          <input id="dob" name="dob" type="date" class="validate">
			          <label for="dob">Date of Birth</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="enrollment_date" name="enrollment_date" type="date" class="validate">
			          <label for="enrollment_date">Date of Enrollment</label>
			        </div>
			        <div class="input-field col s4">
			          <input id="year" name="year" type="number" class="validate">
			          <label for="year">Current School Year</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="home_phone" name="home_phone" type="text" class="validate">
			          <label for="home_phone">Home Phone</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="mobile" name="mobile" type="text" class="validate">
			          <label for="mobile">Mobile</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" name="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="contact_name_1" name="contact_name_1" type="text" class="validate">
			          <label for="contact_name_1">First Contact Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="contact_phone_1" name="contact_phone_1" type="text" class="validate">
			          <label for="contact_phone_1">First Contact Phone</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s6">
			          <input id="contact_name_2" name="contact_name_2" type="text" class="validate">
			          <label for="contact_name_2">Second Contact Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="contact_phone_2" name="contact_phone_2" type="text" class="validate">
			          <label for="contact_phone_2">Second Contact Phone</label>
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
<?php include('register_student.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
		<h2>Register Student</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('error.php'); ?>
		<div class="input-group">
			<label>Student id</label>
			<input type="number" name="studentid" value="<?php echo $studentid; ?>">
		</div>
		<div class="input-group">
			<label>Student Name</label>
			<input type="text" name="studentname" value="<?php echo $studentname; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="phone" name="phonenumber" value="<?php echo $phonenumber; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<label>Entry points</label>
			<input type="number" name="entrypoints" value="<?php echo $entrypoints; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

	</form>
</body>

</html>
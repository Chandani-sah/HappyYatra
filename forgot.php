<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reset password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="tts.png" type="image/png">
</head>
<body style="background-color: rgb(0,64,64);">

	<div class="header">
		<h4>Reset Password</h4>
	</div>
	
	<form method="post" action="forgot.php">

		<?php include('errors.php'); ?>

			<!--<div class="input-group">
				<label>Department</label>
				<select name="department">
					<option value="CSE">CSE</option>
					<option value="ISE">ISE</option>
					<option value="EEE">EEE</option>
					<option value="CIV">CIV</option>
				</select>
			</div>
			<label class="radio-inline">
			<input type="radio" name="proffession" value="Student" required="required">Student
			</label>
			<label class="radio-inline">
			<input type="radio" name="proffession" value="Faculty" required="required">Faculty
			</label>-->

		<div class="input-group">
			<label>Email</label>
			<input type="Email" name="Email" placeholder="Email" required="required" >
		</div>
		<!--<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="password" required="required">
		</div>-->
		<div class="input-group">
			<button type="submit" class="btn" name="forgot_user">Send Code</button>
		</div>

		<p>
			Already a member? <a href="login.php">Signin</a>
		</p>
		<p>
			Not yet a member? <a href="register.php">Signup</a>
		</p>
	</form>


</body>
</html>
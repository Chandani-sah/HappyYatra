<!DOCTYPE html>
<html>
<head>
	<title>Server</title>
</head>
<body>

<?php 
	session_start();

	// variable declaration
	$fname	  = "";
	$lname	  = "";
	$email    = "";
	$password_1 = "";
	$password_2 = ""; 
	$_SESSION['success'] = "";
	$errors = array();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'webproject');

	//if(!$db)
	//	echo "not connected";
	//else
	//	echo "connected";

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled

		
		if (empty($fname)) { array_push($errors, "First name is required"); }
		if (empty($lname)) { array_push($errors, "Last name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "password didnt match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			//$password = md5($password_1);//encrypt the password before saving in the database
			
			$query1 = "SELECT email from register WHERE email = '$email'";
			$res1 = mysqli_query($db,$query1);
			$count1 = mysqli_num_rows($res1);
			

			
			if($count1>0) 
			    		{
						array_push($errors, "Email id already exist.");
			    		}
		   	if($count1==0) 
			{
				$query2 = "INSERT INTO register VALUES('$fname', '$lname', '$email', '$password_1')";
				#$query = "INSERT INTO register VALUES('asdfgh', 'asdfg' 'qwrwqr@wrwe.com', 'jljl')";
				$res2 = mysqli_query($db, $query2);
				if (!$res2) {
					# code...
					echo "table error";
				}else{
					echo"No error";
				}


								
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
								
				header('location: /chandani WEB/places.html');
								
							
								
			}		
					
				
		}

	}

	
	// LOGIN USER
	if (isset($_POST['login_user'])) {

		
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password_1']);

	
		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			//$password_1 = md5($password_1);
			$query = "SELECT email,password_1 FROM register WHERE email='$email' AND password_1='$password'";
			$results = mysqli_query($db, $query);
			if (!$results) {
				# code...
				echo "table error";
			}

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				
					header('location: /chandani WEB/places.html');
				
			}else {
				array_push($errors, "Wrong email/password");
			}
		}
	}

	

?>
</body>
</html>
		
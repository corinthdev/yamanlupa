<?php 
		include 'connection.php';
		$errors = array();
		session_start();

		  if (isset($_POST['register'])) {
		    
			$_SESSION['success'] = "Successfully Registered!";
		    $fname = $_POST['fname'];
		    $uname = $_POST['uname'];
		    $email = $_POST['email'];
		    $pword = $_POST['pass'];
		    $cpass = $_POST['cpass'];
		    $group_id = $_POST['group_id'];

		    //ensure that from fields are filled properly
			if (empty($fname)) {
				array_push($errors, "Fullname is required");
			}
			if (empty($uname)) {
				array_push($errors, "Username is required");
			}
			if (empty($pword)) {
				array_push($errors, "Password is required");
			}

			if ($pword != $cpass) {
				array_push($errors, "The password doesn't match!");
			}

			if (count($errors) == 0) {
			    $pword = md5($pword);
			    $sql = "INSERT INTO credentials (fullname, username, email, password, confirmpassword, group_id)
			    VALUES ('$fname', '$uname', '$email', '$pword', '$cpass', '$group_id')";
			    $query = mysqli_query($conn, $sql);
				$_SESSION['fname'] = $fname;
				header('location: success_registration.php'); //redirect to homepage
			}
			mysqli_close($conn);
		  }

		//login from login page
		if (isset($_POST['login'])){
			login();
		}

		function login() {

		include 'connection.php';
		$_SESSION['error'] = "Incorrect username or password!";
		$username=$_POST['username'];
    	$password=$_POST['password'];

	        // attempt login if no errors on form
				$password = md5($password);

				$query = "SELECT * FROM credentials WHERE username='$username' AND password='$password' LIMIT 1";
				$results = mysqli_query($conn, $query);

				if (mysqli_num_rows($results) == 1) { // user found
					// check if user is admin or user
					$logged_in_user = mysqli_fetch_assoc($results);
					if ($logged_in_user['group_id'] == '0') {

						$_SESSION['user'] = $logged_in_user;
						header('location: ../home/index.php');		  
					}else{
						$_SESSION['user'] = $logged_in_user;

						header('location: ../index.php');
					}
				}			
		}
?>
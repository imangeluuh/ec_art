<html> 
	<head>
		
	</head>
	<body>
	<?php

		// Start session 
		if(!session_id()){
			session_start(); 
		} 

		// Include database configuration file 
		require_once '../database/dbConfig.php'; 

		// Set default redirect url 
		$redirectURL = 'login.php'; 

		if(isset($_POST['sign_up'])){ 

			 // Get form fields value 
			$username = trim($_POST['username']); 
			$password = trim($_POST['password']);
			$c_password = trim($_POST['cpassword']);
			$role = trim($_POST['account']);
			$firstname =trim($_POST['firstname']); 
			$lastname = trim($_POST['lastname']); 
			$email = trim($_POST['email']); 
			$birthdate = $_POST['birthdate']; 
			$phone = $_POST['phone']; 
			$image = $_FILES['displayphoto']['name'];
			$image_tmp = $_FILES['displayphoto']['tmp_name'];

			
		    // Submitted form data 
			// $userData = array( 
			// 	'username' => $username, 
			// 	'password' => $password, 
			// 	'firstname' => $firstname, 
			// 	'lastname' => $lastname, 
			// 	'email' => $email, 
			// 	'birthdate' => $birthdate, 
			// 	'phone' => $phone	        
			// ); 
			
			// check if the username is existing
			$tsql = "SP_FIND_USERNAME ?";
			$params = array($username);
			$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
			$stmt = sqlsrv_query($conn, $tsql, $params, $options);
			$row_count = sqlsrv_num_rows($stmt);
			// if number of rows is greater than 0, the username is already existing
			if($row_count) {
				echo "<script>alert('Username already exists');history.go(-1);</script>";
			} elseif($password != $c_password) {
				echo "<script>alert('Passwords do not match');history.go(-1);</script>";
			} else {
				// Insert data in SQL server 
				move_uploaded_file($image_tmp,"../img/user-img/$image");
				$tsql = "SP_INSERT_ACCOUNT ?, ?, ?, ?, ?, ?, ?, ?, ?";   

				//Assign value to param
				$params = array($username
								,$password
								,$role
								,$firstname
								,$lastname
								,$email
								,$birthdate
								,$phone
								,$image);

				/* Prepare and execute the query. */  
				$insert = sqlsrv_query($conn, $tsql, $params);  
				if ($insert) {  
					$sessData['status']['type'] = 'success'; 
					$sessData['status']['msg'] = 'User data has been added successfully.'; 
					$statusMsg = $sessData['status']['msg'];
					echo "<script>alert($statusMsg)</script";
					
					// Remove submitted field values from session 
					//unset($sessData['userData']); 
					// Store status into the session 
					$_SESSION['sessData'] = $sessData; 
					header("Location:login.php"); 
					exit();
				}
			}
		}							
	

		// Redirect to the respective page 
	?>
	</body>
</html>
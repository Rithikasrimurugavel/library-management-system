
<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title> Admin login</title>
</head>
<?php 
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['submit'])){
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		$isValid = true;

		// Check fields are empty or not
		if($email == '' || $password == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}


		// Check if Email-ID is valid or not
		if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
		  	$error_message = "Invalid Email-ID.";
		}

		if($isValid){

			// Check if Email-ID already exists
			$stmt = $con->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
			$stmt->bind_param("ss", $email,$password);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
			if($result->num_rows == 1){
				$isValid = true;
				$success_message = "login";
			}
			
		}
		
	}
	?>
<body>

<h1><center>library</center></h1>
	<style>
		body {
            background-image: url('book1.webp'); /* Replace with your image path */
            background-size: cover; 
            background-position: center; 
            font-family: 'Arial', sans-serif;
            color: white; /* Set font color to white */
			text-position: center;
			password-position: center;
            margin: 0;
            padding: 0;
		}

	</style>
    <a href="signup.php"><center><button> NEW USER</button></center></a>
    <br><br>
	
	
						<div class="alert alert-danger">
						 <form method="POST" action="">
	<?php 
					// Display Error message
					if(!empty($error_message)){
					?> 	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
                            <h1>
                            <a href="user.php" style = "color : white;">login</a><h1>
						</div>

					<?php
					}
					?><br>
    <div class="form-group">
        <center><table><tr><td>
	    <label for="email">Email address:</label></td>
		<td><input type="email" class="form-control" name="email" id="email" required="required" maxlength="80"></td></tr></tabel>
                </center></div>
    <br>
    <div class="form-group">
    <center><table><tr><td>
		<label for="email">password:</label></td>
		<td><input type="password" class="form-control" name="password" id="password" required="required" maxlength="80"></td></tr></tabel></center>
	</div><br>
    <center><table><tr><td>
    
    <input type="submit"  name="submit" id="submit"></td></tr></table></center>

    
    </form>
	<br>
    <center><table><tr><td>
	<a href="home.php"><button>>>Back<<</button></a></td></tr></tabel></center>

</body>
</html>
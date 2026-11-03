<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
        body {
            background-image: url('book1.webp'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px; /* Adjusted width */
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.2); /* More transparent background */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            font-size: 2em;
            margin-bottom: 20px;
            color: white; /* Set heading color to white */
        }
        .alert {
            margin: 20px 0;
            text-align: center;
        }
        .form-group label {
            color: white; /* Set label color to white */
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent input fields */
            color: black; /* Set input text color to black for better visibility */
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%; /* Full-width button */
        }
        button:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>SignUp</h1>
        <?php 
        $error_message = "";
        $success_message = "";

        // Register user
        if(isset($_POST['btnsignup'])){
            $fname = trim($_POST['fname']);
            $lname = trim($_POST['lname']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $confirmpassword = trim($_POST['confirmpassword']);

            $isValid = true;

            // Check fields are empty or not
            if($fname == '' || $lname == '' || $email == '' || $password == '' || $confirmpassword == ''){
                $isValid = false;
                $error_message = "Please fill all fields.";
            }

            // Check if confirm password matching or not
            if($isValid && ($password != $confirmpassword)){
                $isValid = false;
                $error_message = "Confirm password not matching.";
            }

            // Check if Email-ID is valid or not
            if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $isValid = false;
                $error_message = "Invalid Email-ID.";
            }

            if($isValid){
                // Check if Email-ID already exists
                $stmt = $con->prepare("SELECT * FROM user WHERE email = ?");
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                $stmt->close();
                if($result->num_rows > 0){
                    $isValid = false;
                    $error_message = "Email-ID already exists.";
                }
            }

            // Insert records
            if($isValid){
                $insertSQL = "INSERT INTO user(fname, lname, email, password) VALUES (?, ?, ?, ?)";
                $stmt = $con->prepare($insertSQL);
                $stmt->bind_param("ssss", $fname, $lname, $email, $password);
                $stmt->execute();
                $stmt->close();

                $success_message = "Account created successfully.";
            }
        }
        ?>

        <?php 
        // Display Error message
        if(!empty($error_message)){
        ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?= $error_message ?>
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
            </div>
        <?php
        }
        ?>
        
        <form method='post' action=''>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" name="fname" id="fname" required="required" maxlength="80">
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" name="lname" id="lname" required="required" maxlength="80">
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" required="required" maxlength="80">
            </div>
            <div class="form-group">
                <label for="confirmpassword">Confirm Password:</label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required="required" maxlength="80">
            </div>
            <button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>
</html>

<?php 
$con->close(); // Close the database connection at the end
?>

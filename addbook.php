<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <style>
        body {
            background-image: url('book1.webp');
            background-size: cover; 
            background-position: center; 
            font-family: 'Arial', sans-serif;
            color: white; 
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        h1 {
            text-align: center;
            color: #FFBF00; /* Gold color for visibility */
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #FFBF00; /* Gold */
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: rgba(255, 255, 255, 0.3); /* Transparent background */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            width: 100%; 
            margin-top: 10px; /* Added margin for spacing */
        }
        button:hover {
            background-color: rgba(255, 255, 255, 0.5); /* Slightly less transparent on hover */
        }
        .alert {
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .alert-danger {
            background-color: rgba(248, 215, 218, 0.9);
            color: #721c24;
        }
        .alert-success {
            background-color: rgba(212, 237, 218, 0.9);
            color: #155724;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ADD BOOKS</h1>
        <?php 
        $error_message = "";
        $success_message = "";

        // Register user
        if(isset($_POST['btnsignup'])){
            $bname = trim($_POST['bname']);
            $dept = trim($_POST['dept']);
            $bcount = trim($_POST['bcount']);
            $brack = trim($_POST['brack']);  // Retrieve the rack number
            $brow = trim($_POST['brow']);    // Retrieve the row number
            $isValid = true;

            // Check fields are empty or not
            if($bname == '' || $dept == '' || $bcount == '' || $brack == '' || $brow == ''){
                $isValid = false;
                $error_message = "Please fill all fields.";
            }

            // Insert records if valid
            if($isValid){
                // Prepare and bind
                $insertSQL = "INSERT INTO addbook(bname, dept, bcount, brack, brow) VALUES(?, ?, ?, ?, ?)";
                $stmt = $con->prepare($insertSQL);
                $stmt->bind_param("ssiii", $bname, $dept, $bcount, $brack, $brow); 
                if ($stmt->execute()) {
                    $success_message = "Book Added Successfully.";
                    //Redirect after success
                    header("Location: adminwork.php");
                    exit();
                } else {
                    $error_message = "Error adding book: " . $stmt->error;
                }
                $stmt->close();
            }
        }
        ?>

        <?php 
        // Display Error message
        if(!empty($error_message)){
        ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?= htmlspecialchars($error_message) ?>
            </div>
        <?php
        }
        ?>

        <?php 
        // Display Success message
        if(!empty($success_message)){
        ?>
            <div class="alert alert-success">
                <strong>Success!</strong> <?= htmlspecialchars($success_message) ?>
            </div>
        <?php
        }
        ?>

        <form method='post' action=''>
            <div class="form-group">
                <label for="bname">Book Name:</label>
                <input type="text" name="bname" id="bname" required maxlength="80">
            </div>
            <div class="form-group">
                <label for="dept">Name Of The Department:</label>
                <input type="text" name="dept" id="dept" required maxlength="80">
            </div>
            <div class="form-group">
                <label for="bcount">Number Of Books:</label>
                <input type="number" name="bcount" id="bcount" required min="1">
            </div>
            <div class="form-group">
                <label for="brack">Book rack number:</label>
                <input type="number" name="brack" id="brack" required min="1">
            </div>
            <div class="form-group">
                <label for="brow">Book row number:</label>
                <input type="number" name="brow" id="brow" required min="1">
            </div>
            <button type="submit" name="btnsignup">Submit</button>
        </form>

        <a href="adminwork.php" style="text-decoration: none;">
            <button type="button" style="margin-top: 10px; background-color: rgba(255, 255, 255, 0.3);"> >> B A C K << </button>
        </a>
    </div>
</body>
</html>

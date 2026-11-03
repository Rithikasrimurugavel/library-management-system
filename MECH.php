<?php 
include "config.php";

// Prepare to fetch books based on department
$dept = 'MECH';
$search_term = '';

// Check if the search form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $search_term = trim($_POST['search_term']);
}

// Prepare to fetch books based on department and search term
$sql = "SELECT bname, bcount, brack, brow FROM addbook WHERE dept = ? AND bname LIKE ?";
$stmt = $con->prepare($sql);
$search_param = '%' . $search_term . '%'; // Wildcards for LIKE
$stmt->bind_param("ss", $dept, $search_param);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
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
        .navbar {
            display: flex;
            justify-content: center;
            background-color: rgba(51, 51, 51, 0.7);
            padding: 10px 0;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: rgba(255, 165, 38, 0.8);
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        table {
            margin: 0 auto;
            font-size: large;
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        th {
            background-color: rgba(76, 175, 80, 0.9);
            color: white;
            font-weight: bold;
        }
        td {
            background-color: rgba(76, 175, 80, 0.5);
            font-weight: lighter;
        }
        .alert {
            margin: 20px auto;
            text-align: center;
            color: red; 
        }
        .alert-success {
            color: green; 
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: white; 
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.5); 
            color:black;
        }
        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #4CAF50;
            outline: none;
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
            width: 100%; 
        }
        button:hover {
            background-color: #45a049; 
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="user.php">Home</a>
        <a href="uabout.php">About</a>
        <a href="rules.php">Rules</a>
    </div>
    <div class="container">
        <h1>List Of MECH Books</h1>

        <!-- Search Form -->
        <form method="post" action="">
            <div class="form-group">
                <label for="search_term">Search for a Book:</label>
                <input type="text" name="search_term" id="search_term" value="<?= htmlspecialchars($search_term) ?>" maxlength="80">
            </div>
            <button type="submit" name="search" class="btn btn-default">Search</button>
        </form>

        <table>
            <tr>
                <th>Book Name</th>
                <th>Book Count</th>
                <th>Book rack number</th>
                <th>Book row</th>
            </tr>
            <?php 
            // Display fetched books
            if ($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($rows['bname']); ?></td>
                <td><?php echo htmlspecialchars($rows['bcount']); ?></td>
                <td><?php echo htmlspecialchars($rows['brack']); ?></td>
                <td><?php echo htmlspecialchars($rows['brow']); ?></td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>"; // Update colspan to 4 (number of columns)
            }
            ?>
        </table>

        <?php 
        $error_message = "";
        $success_message = "";

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnsignup'])) {
            $bname = trim($_POST['bname']);
            $semail = trim($_POST['semail']);

            // Validate input
            if ($bname == '' || $semail == '') {
                $error_message = "Please fill all fields.";
            } else {
                // Check current book count
                $checkSQL = "SELECT bcount, brack, brow FROM addbook WHERE bname = ?";
                $checkStmt = $con->prepare($checkSQL);
                $checkStmt->bind_param("s", $bname);
                $checkStmt->execute();
                $checkResult = $checkStmt->get_result();

                if ($checkResult->num_rows > 0) {
                    $bookData = $checkResult->fetch_assoc();
                    $currentCount = $bookData['bcount'];
                    $brack = $bookData['brack'];
                    $brow = $bookData['brow'];

                    if ($currentCount > 0) {
                        // Insert into issuebook
                        $insertSQL = "INSERT INTO issuebook (bname, semail, brack, brow) VALUES (?, ?, ?, ?)";
                        $stmt = $con->prepare($insertSQL);
                        $stmt->bind_param("ssii", $bname, $semail, $brack, $brow);
                        if ($stmt->execute()) {
                            // Decrement the book count
                            $newCount = $currentCount - 1;
                            $updateSQL = "UPDATE addbook SET bcount = ? WHERE bname = ?";
                            $updateStmt = $con->prepare($updateSQL);
                            $updateStmt->bind_param("is", $newCount, $bname);
                            $updateStmt->execute();
                            $success_message = "Book issued successfully.";
                        } else {
                            $error_message = "Error issuing book: " . $stmt->error;
                        }
                        $stmt->close();
                    } else {
                        $error_message = "No copies available for this book.";
                    }
                } else {
                    $error_message = "Book not found.";
                }
                $checkStmt->close();
            }
        }
        ?>

        <!-- Form to issue a book -->
        <form method="post" action="">
            <?php 
            if (!empty($error_message)) {
            ?>
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?= $error_message ?>
                </div>
            <?php
            }
            ?>

            <?php 
            if (!empty($success_message)) {
            ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?= $success_message ?>
                </div>
            <?php
            }
            ?>

            <div class="form-group">
                <label for="bname">Book Name:</label>
                <input type="text" class="form-control" name="bname" id="bname" required="required" maxlength="80">
            </div>
            <div class="form-group">
                <label for="semail">Student Email:</label>
                <input type="email" class="form-control" name="semail" id="semail" required="required" maxlength="80">
            </div>
            <button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>
</html>

<?php 
$con->close(); // Close the database connection at the end
?> 

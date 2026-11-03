<?php 
include "config.php";

// Prepare to fetch books based on department
$dept = 'AIDS';
$sql = "SELECT * FROM addbook WHERE dept = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $dept);
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
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            width: 80%;
            border-collapse: collapse;
        }
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
        td {
            background-color: #E4F5D4;
            font-weight: lighter;
        }
        .alert {
            margin: 20px auto;
            text-align: center;
            color: red; /* Default color for errors */
        }
        .alert-success {
            color: green; /* Color for success messages */
        }
    </style>
</head>
<body>
    <section>
        <h1>List Of AIDS Books</h1>
        <table>
            <tr>
                <th>Book Name</th>
            </tr>
            <?php 
            // Display fetched books
            if ($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($rows['bname']); ?></td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='1'>No records found</td></tr>";
            }
            ?>
        </table>
    </section>

    <?php 
    $error_message = "";
    $success_message = "";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnsignup'])) {
        // Fetching and sanitizing user input
        $bname = trim($_POST['bname']);
        $semail = trim($_POST['semail']);

        // Validate input
        if ($bname == '' || $semail == '') {
            $error_message = "Please fill all fields.";
        } else {
            // Prepare and execute the insert statement
            $insertSQL = "INSERT INTO issuebook (bname, semail) VALUES (?, ?)";
            $stmt = $con->prepare($insertSQL);
            $stmt->bind_param("ss", $bname, $semail);

            if ($stmt->execute()) {
                $success_message = "Book issued successfully.";
            } else {
                $error_message = "Error issuing book: " . $stmt->error;
            }
            $stmt->close(); // Close the prepared statement
        }
    }
    ?>

    <!-- Form to issue a book -->
    <form method="post" action="">
        <?php 
        // Display error message
        if (!empty($error_message)) {
        ?>
            <div class="alert alert-danger">
                <strong>Error!</strong> <?= $error_message ?>
            </div>
        <?php
        }
        ?>

        <?php 
        // Display success message
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
</body>
</html>

<?php 
$con->close(); // Close the database connection at the end
?>

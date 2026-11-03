<?php
include "config.php";


// Initialize variables
$error_message = "";
$books = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = trim($_POST['email']); // Get email from the form submission

    // Prepare SQL statement to fetch user ID based on the email
    $sqlUser = "SELECT id FROM user WHERE email = ?";
    $stmtUser = $con->prepare($sqlUser);
    $stmtUser->bind_param("s", $email); // Bind the email parameter
    $stmtUser->execute();
    $resultUser = $stmtUser->get_result();

    // Check if user exists
    if ($resultUser->num_rows > 0) {
        $user = $resultUser->fetch_assoc();
        $user_id = $user['id'];

        // Prepare SQL statement to fetch books for the user
        $sqlBooks = "SELECT b.bookid FROM sissuebook b WHERE b.semail = ?";
        $stmtBooks = $con->prepare($sqlBooks);
        $stmtBooks->bind_param("i", $user_id); // Bind the user_id parameter
        $stmtBooks->execute();
        $resultBooks = $stmtBooks->get_result();

        // Fetch books
        while ($row = $resultBooks->fetch_assoc()) {
            $books[] = $row; // Add each book to the array
        }

        $stmtBooks->close();
    } else {
        $error_message = "No user found with this email.";
    }

    $stmtUser->close();
} else {
    $error_message = "Please enter your email.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requested Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #B0E0E6; /* Powder Blue */
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .alert {
            color: red;
        }
        .success {
            color: green;
        }
        .form-group {
            margin: 15px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Requested Books</h1>

        <form method="post" action="">
            <div class="form-group">
                <label for="email">Enter Your Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <button type="submit" class="btn btn-default">Check Books</button>
        </form>

        <?php if (!empty($error_message)): ?>
            <div class="alert"><?= $error_message ?></div>
        <?php endif; ?>

        <?php if (!empty($books)): ?>
            <ul>
                <?php foreach ($books as $book): ?>
                    <li><strong>Book Name:</strong> <?= htmlspecialchars($book['bname']) ?>, <strong>Department:</strong> <?= htmlspecialchars($book['dept']) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>

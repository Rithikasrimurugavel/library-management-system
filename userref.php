<?php 
include "config.php";



// Fetch user's first name from the database if logged in
$firstName = '';
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $sql = "SELECT fname FROM user WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($firstName);
    $stmt->fetch();
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('book1.webp'); /* Add your background image */
            background-size: cover; /* Cover the entire area */
            background-position: center; /* Center the background image */
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .navbar {
            display: flex;
            justify-content: space-between; /* Space between links and username */
            align-items: center; /* Center vertically */
            background-color: rgba(51, 51, 51, 0.7); /* Semi-transparent background */
            padding: 10px 20px; /* Add padding */
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: rgba(255, 165, 38, 0.8); /* Semi-transparent hover */
        }

        .username {
            color: white; /* Username color */
            font-size: 1.2em; /* Increase font size for visibility */
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 2.5em;
            color: rgba(255, 255, 255, 0.9); /* White with slight transparency */
        }

        .bor1 {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .department-link {
            display: flex;
            align-items: center;
            padding: 15px;
            margin: 10px 0;
            font-size: 1.5em;
            color: #00796b;
            text-decoration: none;
            border: 2px solid #00796b;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .department-link img {
            width: 50px; /* Set a fixed size for images */
            height: auto;
            margin-right: 15px; /* Space between image and text */
            border-radius: 5px; /* Round the corners of the image */
        }

        .department-link:hover {
            background-color: rgba(0, 121, 107, 0.8); /* Semi-transparent hover */
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div>
            <a href="home.php">Home</a>
            <a href="uabout.php">About</a>
            <a href="rules.php">Rules</a>
        </div>
        <div class="username">
            <?php echo htmlspecialchars($firstName); ?>
        </div>
    </div>
    <h1>Select Department</h1>
    <div class="bor1">
        <a href="EEE.php" class="department-link">
            <img src="eee.jpg" alt="Electrical and Electronics Engineering">
            Electrical and Electronics Engineering
        </a>
        <a href="CSE.php" class="department-link">
            <img src="cse.avif" alt="Computer Science and Engineering">
            Computer Science and Engineering
        </a>
        <a href="ECE.php" class="department-link">
            <img src="ece.jpg" alt="Electronics & Communication Engineering">
            Electronics & Communication Engineering
        </a>
        <a href="MECH.php" class="department-link">
            <img src="mech.jpg" alt="Mechanical Engineering">
            Mechanical Engineering
        </a>
        <a href="extrabooks.php" class="department-link">
            <img src="extra.jpg" alt="Extra Books">
            Extra Books
        </a>
        <a href="commonbooks.php" class="department-link">
            <img src="common.jpg" alt="Common to All Department Books">
            Common to All Department Books
        </a>
        <a href="onlinebooks.php" class="department-link">
            <img src="online.jfif" alt="For Online Reading">
            For Online Reading
        </a>
    </div>
</body>
</html>

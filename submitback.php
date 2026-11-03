<?php
// Database connection parameters
$host = "localhost";    // Host name
$user = "root";         // User
$password = "";         // Password
$dbname = "lib";        // Database name

// Create connection
$con = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; // Optional: For testing purposes

// Remember to close the connection when done
// mysqli_close($con);
?>

<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            background-image: url('book1.webp'); /* Background image */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }
        h1, h3 {
            text-align: center;
            color: white; /* Text color */
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .button {
            display: inline-block;
            background-color: rgba(76, 175, 80, 0.3); /* Transparent green */
            border: 2px solid rgba(76, 175, 80, 0.7); /* Semi-transparent border */
            border-radius: 5px;
            color: white;
            font-size: 1.5em;
            padding: 15px 30px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s, border-color 0.3s;
            margin: 20px;
            text-decoration: none; /* Remove underline */
        }
        .button:hover {
            background-color: rgba(76, 175, 80, 0.5); /* Darker transparent green on hover */
            border-color: rgba(76, 175, 80, 1); /* Solid border on hover */
            transform: scale(1.05); /* Scale up on hover */
        }
        .date-time {
            font-size: 30px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><marquee>LIBRARY MANAGEMENT SYSTEM</marquee></h1>
        <div class="date-time">
            <p class="currDate"></p>
            <p class="display-time"></p>
        </div>
        <h3>Click the given option</h3>
        <a href="student.php" class="button">USER</a>
        <a href="adminlogin.php" class="button">ADMIN</a>
    </div>
    
    <script type="text/javascript">
        // Display current date
        let currDate = new Date().toLocaleDateString("en-GB");
        document.querySelector(".currDate").textContent = currDate;

        // Display current time
        function updateTime() {
            const now = new Date();
            document.querySelector(".display-time").textContent = now.toLocaleTimeString();
        }
        setInterval(updateTime, 1000); // Update time every second
    </script>
</body>
</html>

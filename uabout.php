<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Library Management System</title>
    <style>
        body {
            background-image: url('book1.webp'); /* Replace with your image path */
            background-size: cover; 
            background-position: center; 
            font-family: 'Arial', sans-serif;
            color: white; /* Set font color to white */
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px; /* Adjusted width */
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.2); /* More transparent background */
            border-radius: 10px;
            padding: 30px; /* Increased padding */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            font-size: 3em; /* Increased heading size */
            margin-bottom: 20px;
        }
        p {
            font-size: 22px; /* Increased paragraph font size */
            line-height: 1.8; /* Increased line height for better readability */
            color: white; /* Set paragraph text color to white */
        }
        button {
            background-color: rgba(76, 175, 80, 0.7); /* More transparent green */
            color: white;
            padding: 12px 15px; /* Increased button padding */
            border: none;
            border-radius: 5px;
            font-size: 18px; /* Increased button font size */
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            width: 100%; /* Full-width button */
        }
        button:hover {
            background-color: rgba(76, 175, 80, 0.9); /* Slightly darker transparent green on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ABOUT:</h1>
        <p>A Library Management System is designed to maintain information about the books present in the library. Users, including students and staff, can collect books from the library, and an admin manages these operations. Organizing this information manually can be complex and challenging. However, with technological advancements, managing an online library has become much simpler.</p>
        <p>The library management system is designed to automate operations related to members, book issues, returns, and other related tasks. This computerization helps reduce the workload of management by minimizing manual processes.</p>
        <a href="user.php"><button> >> B A C K << </button></a>
    </div>
</body>
</html>

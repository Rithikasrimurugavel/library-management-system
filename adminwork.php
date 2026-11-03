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
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('book1.webp');
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .navbar {
            display: flex;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px 0;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin: 0 10px;
        }

        .navbar a:hover {
            background-color: rgba(255, 165, 38, 0.9);
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 2.5em;
            color: #fff;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.3); /* More transparent */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.6); /* Semi-transparent */
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .button {
            display: inline-block;
            padding: 15px 20px;
            font-size: 18px;
            color: #fff;
            background: linear-gradient(45deg, #28a745, #218838);
            border: none;
            border-radius: 30px;
            text-decoration: none;
            transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .button:hover {
            background: linear-gradient(45deg, #218838, #1e7e34);
            transform: translateY(-2px);
        }

        .button:active {
            background: linear-gradient(45deg, #1e7e34, #1c7430);
            box-shadow: 0 5px rgba(0, 0, 0, 0.5);
            transform: translateY(2px);
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
    </div>

    <h1>Library Management System</h1>

    <div class="container">
        <div class="card">
            <a href="issuedbook.php" class="button">Issued Books</a>
        </div>
        <div class="card">
            <a href="addbook.php" class="button">Add Books</a>
        </div>
        <div class="card">
            <a href="viewbook.php" class="button">View Books</a>
        </div>
        <div class="card">
            <a href="viewuser.php" class="button">View Users</a>
        </div>
    </div>

</body>
</html>

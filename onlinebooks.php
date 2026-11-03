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
            text-align: center;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .book-card {
            background-color: rgba(76, 175, 80, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .book-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
        }
        .back-card {
            background-color: rgba(255, 0, 0, 0.7); /* Semi-transparent red */
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }
        .back-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
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
        <h1>Available Books</h1>
        <div class="book-list">
            <?php 
                $books = [
                    ["name" => "Advanced Python", "link" => "advancepython.php"],
                    ["name" => "Architectural Engineering", "link" => "architecturalengineering.php"],
                    ["name" => "C Language", "link" => "clanguage.php"],
                    ["name" => "Digital Signal", "link" => "digitalsignal.php"],
                    ["name" => "Embedded System", "link" => "embeddedsystem.php"],
                    ["name" => "Fluid Mechanics", "link" => "fluidmechanics.php"],
                    ["name" => "GenAI", "link" => "genai.php"],
                    ["name" => "IoT", "link" => "iot.php"],
                    ["name" => "Machine Learning", "link" => "machinelearning.php"],
                    ["name" => "Microelectronics", "link" => "microelectronics.php"],
                    ["name" => "Microprocessors", "link" => "microprocessors.php"],
                    ["name" => "OOPs", "link" => "Oops.php"],
                    ["name" => "Python", "link" => "python.php"],
                    ["name" => "Ruby", "link" => "ruby.php"],
                    ["name" => "Solid Mechanics", "link" => "solidmechanics.php"],
                    ["name" => "Mechatronics", "link" => "Mechatronics.php"],
                ];
                
                foreach ($books as $book) {
                    echo '<div class="book-card" onclick="location.href=\'' . $book['link'] . '\'">';
                    echo '<h2>' . htmlspecialchars($book['name']) . '</h2>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="back-card" onclick="location.href='user.php'">
            <h2>Back</h2>
        </div>
    </div>
</body>
</html>

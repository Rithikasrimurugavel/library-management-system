<?php 
include "config.php";
$sql = "SELECT * FROM user ORDER BY id";
$result = $con->query($sql);
$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
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
        h1 {
            text-align: center;
            font-size: 2.5em; 
            margin: 20px 0;
        }
        table {
            margin: 20px auto;
            font-size: large;
            width: 80%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.2); 
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
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
            color: white; 
        }
        button {
            background-color: rgba(76, 175, 80, 0.7); 
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
            width: 150px;
        }
        button:hover {
            background-color: rgba(76, 175, 80, 0.9);
        }
    </style>
</head>
<body>
    <section>
        <h1>User Details</h1>
        <table>
            <tr>
                <th>S.NO</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            <?php 
            // LOOP TILL END OF DATA
            while ($rows = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($rows['id']); ?></td>
                <td><?php echo htmlspecialchars($rows['fname']); ?></td>
                <td><?php echo htmlspecialchars($rows['lname']); ?></td>
                <td><?php echo htmlspecialchars($rows['email']); ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <a href="adminwork.php"><button type="button"> >> B A C K << </button></a>
    </section>
</body>
</html>

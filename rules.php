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
            padding: 20px;
        }
        .container {
            max-width: 900px; /* Adjusted width */
            margin: auto;
            background-color: rgba(255, 255, 255, 0.2); /* More transparent background */
            padding: 30px; /* Increased padding */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            font-size: 3em; /* Increased heading size */
            margin-bottom: 20px;
        }
        p {
            font-size: 22px; /* Increased paragraph font size */
            line-height: 1.6; /* Increased line height for better readability */
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
        <h1>RULES AND REGULATIONS:</h1>
        <p>1. Users are required to stand in a queue while returning or getting the book/document. Making noise, spitting, or doing anything that may disturb other students or is against library rules is strictly prohibited.</p>
        <p>2. Users are requested not to misplace books from one shelf to another; they shall leave the books on the reference tables after using; library staff will replace the books in their respective positions.</p>
        <p>3. A book misplaced is a book lost. Hence, users are requested not to disturb the sequence of arrangement of books in the rack.</p>
        <p>4. Underlining, scribbling, tearing of pages, or any other type of mutilation of books, magazines, journals, etc., as well as mishandling or misuse of computers will lead to severe action and fines.</p>
        <p>5. Users are responsible for all books borrowed on their account.</p>
        <p>6. Users should satisfy themselves that the books are in good condition before leaving the counter. If any damage is found, it must be immediately reported; otherwise, the user will be held responsible for any damage. A minimum fine of RS.100/- will be charged for any book damaged due to rains, stains, being torn, loose binding, or plastic covers being removed or torn.</p>
        <p>7. In case a book is lost by a borrower, the user must replace the latest edition of the resource at his/her own cost within a week. If failed to do so, the user will be fined three times the cost of foreign authored books and two times the cost of Indian authored books as replacement fees.</p>
        <p>8. Users must register using their college email and provide accurate personal information.</p>
        <p>9. Users are responsible for keeping their passwords secure and must not share them with others.</p>
        <p>10. Users may borrow a specified number of items at a time.</p>
        <p>11. Items must be returned by the due date to avoid late fees or account restrictions.</p>
        <p>12. Violations of these rules may result in account suspension or other disciplinary actions.</p>
        <p>13. Users should periodically check for updates to these rules and policies.</p>
        <br>
        <a href="user.php"><button> >> B A C K << </button></a>
    </div>
</body>
</html>

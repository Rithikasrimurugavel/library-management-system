<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fluid Mechanics Overview</title>
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
            max-width: 800px; /* Adjusted width */
            margin: auto; /* Centering the container */
            background-color: rgba(0, 0, 0, 0.7); /* Darker background for contrast */
            padding: 30px; /* Increased padding */
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }
        h1 {
            text-align: center;
            font-size: 3.5em; /* Increased heading size */
            margin-bottom: 25px;
            text-transform: uppercase; /* Uppercase heading */
            letter-spacing: 2px; /* Spacing between letters */
        }
        h2 {
            color: #FFD700; /* Gold color for subheadings */
            font-size: 2.5em; /* Increased subheading size */
            margin-top: 20px; /* Space above subheadings */
            margin-bottom: 15px; /* Space below subheadings */
            border-bottom: 2px solid #FFD700; /* Underline effect */
            padding-bottom: 10px; /* Padding below subheadings */
        }
        p, li {
            font-size: 20px; /* Adjusted paragraph and list item font size */
            line-height: 1.6; /* Increased line height for better readability */
            color: #E0E0E0; /* Lighter gray for better contrast */
        }
        ul {
            margin: 20px 0; /* Space around lists */
            padding-left: 20px; /* Indentation for lists */
        }
        code {
            background-color: rgba(255, 255, 255, 0.2); /* Light background for code */
            padding: 2px 4px;
            border-radius: 4px;
            font-family: monospace; /* Ensures a monospaced font for code */
        }
        .back-button {
            display: block; /* Makes it a block element */
            width: 100%; /* Full-width button */
            padding: 15px; /* Padding for button */
            margin-top: 30px; /* Margin above the button */
            border: none;
            border-radius: 5px; /* Rounded corners */
            background-color: rgba(76, 175, 80, 0.8); /* Consistent color */
            color: white;
            font-size: 20px; /* Increased font size */
            text-align: center; /* Center text */
            text-transform: uppercase; /* Uppercase text */
            letter-spacing: 1px; /* Letter spacing */
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: rgba(76, 175, 80, 1); /* Darker green on hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Fluid Mechanics Overview</h1>

        <h2>What is Fluid Mechanics?</h2>
        <p>Fluid mechanics is the branch of physics that studies the behavior of fluids (liquids and gases) at rest and in motion. It encompasses various principles and laws that describe how fluids interact with forces and with each other.</p>

        <h2>Uses of Fluid Mechanics</h2>
        <ul>
            <li>Engineering (design of hydraulic systems, pumps, pipelines)</li>
            <li>Environmental Science (analysis of natural water bodies)</li>
            <li>Aerospace (study of airflows around aircraft)</li>
            <li>Meteorology (understanding atmospheric phenomena)</li>
            <li>Biomedical Engineering (design of medical devices)</li>
        </ul>

        <h2>Construction Process</h2>
        <p>The construction of fluid mechanics systems typically involves:</p>
        <ul>
            <li><strong>Modeling Fluid Behavior:</strong> Using mathematical models to describe fluid flow.</li>
            <li><strong>Experimentation:</strong> Conducting experiments to observe fluid behaviors.</li>
            <li><strong>Simulation:</strong> Utilizing computational fluid dynamics (CFD) software for analysis.</li>
            <li><strong>Designing Systems:</strong> Creating equipment to manage fluid movement.</li>
        </ul>

        <h2>Components Required</h2>
        <ul>
            <li>Fluids (liquids and gases)</li>
            <li>Measurement instruments (flowmeters, manometers)</li>
            <li>Computational software (e.g., ANSYS, COMSOL)</li>
            <li>Experimental apparatus (wind tunnels, hydraulic setups)</li>
        </ul>

        <h2>Purpose of Fluid Mechanics</h2>
        <ul>
            <li>Understanding fluid behavior</li>
            <li>Design optimization of fluid systems</li>
            <li>Problem solving in engineering contexts</li>
            <li>Ensuring safety and compliance with regulations</li>
        </ul>

        <h2>Advantages of Fluid Mechanics</h2>
        <ul>
            <li>Predictive capability for fluid behavior</li>
            <li>Efficiency improvements in design</li>
            <li>Versatile applications across industries</li>
            <li>Facilitates innovative solutions to fluid-related problems</li>
        </ul>

        <h2>Disadvantages of Fluid Mechanics</h2>
        <ul>
            <li>Complexity in modeling fluid behavior</li>
            <li>Resource-intensive experimental setups</li>
            <li>Reliance on assumptions that may not hold true</li>
            <li>Potential environmental impacts</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Fluid mechanics is a vital field with significant implications for engineering, environmental science, and technology. Understanding fluid behavior enables the design of more efficient systems, although it presents challenges that require careful consideration.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

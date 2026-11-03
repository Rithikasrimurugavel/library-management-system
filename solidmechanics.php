<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Solid Mechanics Overview</title>
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
        <h1>Solid Mechanics Overview</h1>

        <h2>What is Solid Mechanics?</h2>
        <p>Solid mechanics is the branch of mechanics that studies the behavior of solid materials under various types of loading, including stress, strain, deformation, and failure analysis.</p>

        <h2>Uses of Solid Mechanics</h2>
        <ul>
            <li>Civil Engineering: Design of structures like bridges and buildings.</li>
            <li>Mechanical Engineering: Analysis of mechanical components.</li>
            <li>Aerospace Engineering: Study of aircraft materials under stress.</li>
            <li>Manufacturing: Understanding material properties for machining processes.</li>
            <li>Biomechanics: Analyzing the mechanical behavior of biological tissues.</li>
        </ul>

        <h2>Construction of Solid Mechanics Systems</h2>
        <ul>
            <li><strong>Material Selection:</strong> Choosing appropriate materials based on their mechanical properties.</li>
            <li><strong>Modeling:</strong> Creating mathematical models to describe solid behavior.</li>
            <li><strong>Simulation:</strong> Using software for finite element analysis (FEA).</li>
            <li><strong>Testing:</strong> Conducting experiments to validate models and ensure performance.</li>
        </ul>

        <h2>Components Required</h2>
        <ul>
            <li>Materials: Solid materials such as metals, plastics, and composites.</li>
            <li>Testing Equipment: Tools for measuring stress, strain, and deformation.</li>
            <li>Computational Software: FEA software for simulation and analysis.</li>
            <li>Design Standards: Codes that define material properties and safety factors.</li>
        </ul>

        <h2>Purpose of Solid Mechanics</h2>
        <ul>
            <li>Understanding Material Behavior: Analyzing responses to external forces.</li>
            <li>Design Optimization: Ensuring structures can withstand loads without failure.</li>
            <li>Safety Assurance: Preventing structural failures.</li>
            <li>Innovation: Developing new materials and designs.</li>
        </ul>

        <h2>Advantages of Solid Mechanics</h2>
        <ul>
            <li>Predictive Power: Ability to predict material behavior.</li>
            <li>Enhanced Safety: Ensures designs are safe and reliable.</li>
            <li>Cost Efficiency: Optimizes material use and reduces waste.</li>
            <li>Wide Applicability: Relevant across various engineering fields.</li>
        </ul>

        <h2>Disadvantages of Solid Mechanics</h2>
        <ul>
            <li>Complexity of Analysis: Requires significant expertise.</li>
            <li>Assumptions and Limitations: Models may not accurately represent real conditions.</li>
            <li>Resource Intensive: Advanced computational resources are needed.</li>
            <li>Material Variability: Real materials may exhibit unpredictable behavior.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Solid mechanics is essential for engineering and material science, providing the basis for designing safe and efficient structures and components, while presenting challenges that require careful consideration.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

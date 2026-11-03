<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mechatronics Overview</title>
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
        <h1>Mechatronics Overview</h1>

        <h2>What is Mechatronics?</h2>
        <p>Mechatronics is an interdisciplinary field that combines mechanical engineering, electronics, computer science, control engineering, and systems engineering. It focuses on the design and manufacturing of intelligent systems and products that integrate mechanical components with electronic controls and software.</p>

        <h2>What is it Used For?</h2>
        <ul>
            <li>Robotics: Design and control of robotic systems for industrial automation and service robots.</li>
            <li>Automated Manufacturing: Integration of machines and control systems for efficient production processes.</li>
            <li>Automotive Systems: Advanced driver-assistance systems (ADAS) and automated steering systems.</li>
            <li>Consumer Products: Smart appliances and smart home technologies.</li>
            <li>Medical Devices: Surgical robots and diagnostic equipment.</li>
        </ul>

        <h2>Construction</h2>
        <p>Mechatronics construction involves design, prototyping, integration, and testing to create efficient systems that combine mechanical and electronic components.</p>

        <h2>Components Required</h2>
        <ul>
            <li><strong>Mechanical Components:</strong> Gears, actuators, motors, and linkages.</li>
            <li><strong>Electronic Components:</strong> Sensors, microcontrollers, and power supplies.</li>
            <li><strong>Software:</strong> Control algorithms and simulation tools.</li>
            <li><strong>Communication Interfaces:</strong> Protocols like CAN and RS-232 for system integration.</li>
        </ul>

        <h2>What is the Purpose?</h2>
        <p>The primary purposes of mechatronics include system integration, automation, smart technology development, and improved performance through sophisticated control mechanisms.</p>

        <h2>Advantages of Mechatronics</h2>
        <ul>
            <li>Enhanced Efficiency: Integrated systems perform tasks faster and more accurately.</li>
            <li>Flexibility: Easily reconfigurable systems for different tasks or products.</li>
            <li>Reduced Size and Weight: Combines functions into smaller, lighter designs.</li>
            <li>Increased Reliability: Fewer components reduce the likelihood of failure.</li>
            <li>Improved User Experience: Intelligent systems provide better interfaces for users.</li>
        </ul>

        <h2>Disadvantages of Mechatronics</h2>
        <ul>
            <li>Complexity: Requires expertise across multiple disciplines.</li>
            <li>Cost: Initial development and integration can be expensive.</li>
            <li>Maintenance: Complex systems may need specialized knowledge for troubleshooting.</li>
            <li>Dependency on Technology: High reliance on electronic components can lead to vulnerabilities.</li>
            <li>Rapid Technological Change: Keeping up with advances can be difficult.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Mechatronics is a vital field that combines various engineering disciplines to create intelligent systems, improving efficiency and functionality in numerous applications.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

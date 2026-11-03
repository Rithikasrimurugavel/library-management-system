<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Python Overview</title>
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
        <h1>Python Overview</h1>

        <h2>What is Python?</h2>
        <p>Python is a high-level, interpreted programming language known for its easy-to-read syntax and versatility. It supports multiple programming paradigms, including procedural, object-oriented, and functional programming.</p>

        <h2>What is Python Used For?</h2>
        <ul>
            <li>Web Development: Frameworks like Django and Flask.</li>
            <li>Data Science: Libraries like Pandas, NumPy, and Matplotlib.</li>
            <li>Machine Learning: Libraries like TensorFlow and Scikit-learn.</li>
            <li>Automation and Scripting: Automating repetitive tasks.</li>
            <li>Game Development: Libraries like Pygame.</li>
        </ul>

        <h2>Key Python Modules</h2>
        <ul>
            <li><strong>NumPy</strong>: Fundamental package for numerical computations.</li>
            <li><strong>Pandas</strong>: Data manipulation and analysis library.</li>
            <li><strong>Matplotlib</strong>: Plotting library for creating visualizations.</li>
            <li><strong>Scikit-learn</strong>: Machine learning library for data analysis.</li>
            <li><strong>Requests</strong>: Simplifies making HTTP requests.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Hello World:</strong>
                <pre><code>print("Hello, World!")</code></pre>
            </li>
            <li><strong>Basic Calculator:</strong>
                <pre><code>def add(a, b):
    return a + b

print("Addition:", add(5, 3))</code></pre>
            </li>
            <li><strong>Data Visualization:</strong>
                <pre><code>import matplotlib.pyplot as plt

x = [1, 2, 3, 4, 5]
y = [2, 3, 5, 7, 11]
plt.plot(x, y)
plt.title("Sample Plot")
plt.show()</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using Python</h2>
        <ul>
            <li>Ease of Learning</li>
            <li>Rapid Development</li>
            <li>Community Support</li>
            <li>Portability</li>
        </ul>

        <h2>Advantages of Python</h2>
        <ul>
            <li>Readability</li>
            <li>Extensive Libraries</li>
            <li>Cross-Platform</li>
            <li>Strong Community</li>
            <li>Versatile</li>
        </ul>

        <h2>Disadvantages of Python</h2>
        <ul>
            <li>Speed</li>
            <li>Memory Consumption</li>
            <li>Less Common in Mobile Development</li>
            <li>Runtime Errors</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Python is a versatile programming language with numerous applications across various fields. Its ease of learning and extensive libraries make it a popular choice for developers, although its performance can be a limitation in some scenarios.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

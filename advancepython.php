<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Python Overview</title>
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
            margin: 50px auto; /* Centering the container */
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
        pre {
            background-color: rgba(255, 255, 255, 0.2); /* Slightly transparent background for code blocks */
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
            color: #FFD700; /* Gold color for code text */
            font-size: 18px; /* Adjusted font size for code */
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
        <h1>Advanced Python Overview</h1>

        <h2>What is Advanced Python?</h2>
        <p>Advanced Python refers to deeper concepts in Python programming that go beyond basic syntax, such as object-oriented programming, decorators, generators, and concurrency, essential for building robust applications.</p>

        <h2>What is it Used For?</h2>
        <ul>
            <li>Artificial Intelligence (AI)</li>
            <li>Data Science (DS)</li>
            <li>Web Development</li>
            <li>Automation</li>
        </ul>

        <h2>Key Modules and Libraries</h2>
        <ul>
            <li><strong>NumPy</strong>: Numerical computations</li>
            <li><strong>Pandas</strong>: Data manipulation and analysis</li>
            <li><strong>Matplotlib & Seaborn</strong>: Data visualization</li>
            <li><strong>Scikit-Learn</strong>: Machine learning models</li>
            <li><strong>TensorFlow & PyTorch</strong>: Deep learning frameworks</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Data Analysis with Pandas:</strong>
                <pre><code>import pandas as pd

# Load dataset
df = pd.read_csv('data.csv')

# Data summary
print(df.describe())</code></pre>
            </li>
            <li><strong>Simple Neural Network with TensorFlow:</strong>
                <pre><code>import tensorflow as tf

# Load dataset
(x_train, y_train), (x_test, y_test) = tf.keras.datasets.mnist.load_data()

# Preprocess
x_train, x_test = x_train / 255.0, x_test / 255.0

# Build model
model = tf.keras.models.Sequential([
    tf.keras.layers.Flatten(input_shape=(28, 28)),
    tf.keras.layers.Dense(128, activation='relu'),
    tf.keras.layers.Dense(10, activation='softmax')
])</code></pre>
            </li>
        </ul>

        <h2>Advantages of Advanced Python</h2>
        <ul>
            <li>Ease of Learning</li>
            <li>Rich Ecosystem</li>
            <li>Community Support</li>
            <li>Integration Capabilities</li>
            <li>Flexibility in programming paradigms</li>
        </ul>

        <h2>Disadvantages of Advanced Python</h2>
        <ul>
            <li>Performance issues in some scenarios</li>
            <li>Higher memory consumption</li>
            <li>Not ideal for mobile development</li>
            <li>Global Interpreter Lock (GIL) limitations</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Advanced Python is a powerful tool for AI and data science, enabling efficient and scalable solutions. While it has numerous advantages, developers should also be aware of its limitations and challenges.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

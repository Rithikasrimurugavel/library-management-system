<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Machine Learning Language Overview</title>
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
        <h1>Machine Learning Language Overview</h1>

        <h2>What is the Meaning of Machine Learning Language?</h2>
        <p>Machine learning language refers to programming languages and frameworks designed to develop algorithms that enable computers to learn from data and make predictions. Commonly used languages include Python, R, Java, and Julia.</p>

        <h2>What is it Used For?</h2>
        <ul>
            <li>Building predictive models</li>
            <li>Data analysis and visualization</li>
            <li>Natural language processing (NLP)</li>
            <li>Computer vision tasks</li>
            <li>Reinforcement learning</li>
        </ul>

        <h2>Key Modules and Libraries</h2>
        <ul>
            <li><strong>Python:</strong>
                <ul>
                    <li>Scikit-Learn</li>
                    <li>TensorFlow</li>
                    <li>Keras</li>
                    <li>PyTorch</li>
                    <li>Pandas</li>
                </ul>
            </li>
            <li><strong>R:</strong>
                <ul>
                    <li>caret</li>
                    <li>randomForest</li>
                    <li>xgboost</li>
                    <li>mlr</li>
                </ul>
            </li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Basic Classification with Scikit-Learn (Python):</strong>
                <pre><code>import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score

# Load dataset
data = pd.read_csv('data.csv')
X = data.drop('target', axis=1)
y = data['target']

# Split dataset
X_train, X_test, y_train, y_test = train_test_split(X, y, 
                        test_size=0.2, random_state=42)

# Initialize and train model
model = RandomForestClassifier()
model.fit(X_train, y_train)

# Make predictions
predictions = model.predict(X_test)

# Evaluate model
accuracy = accuracy_score(y_test, predictions)
print(f'Accuracy: {accuracy:.2f}')</code></pre>
            </li>
            <li><strong>Simple Neural Network with Keras (Python):</strong>
                <pre><code>import tensorflow as tf
from tensorflow import keras

# Load dataset
(x_train, y_train), (x_test, y_test) = keras.datasets.mnist.load_data()

# Preprocess
x_train = x_train / 255.0
x_test = x_test / 255.0

# Build model
model = keras.Sequential([
    keras.layers.Flatten(input_shape=(28, 28)),
    keras.layers.Dense(128, activation='relu'),
    keras.layers.Dense(10, activation='softmax')
])

# Compile model
model.compile(optimizer='adam', loss='sparse_categorical_crossentropy',
                                     metrics=['accuracy'])

# Train model
model.fit(x_train, y_train, epochs=5)

# Evaluate model
test_loss, test_acc = model.evaluate(x_test, y_test)
print(f'Test accuracy: {test_acc:.2f}')</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using Machine Learning Languages</h2>
        <p>The purpose is to facilitate the development of algorithms that learn from data, enabling automation, scalability, and innovation across various fields.</p>

        <h2>Advantages of Machine Learning Languages</h2>
        <ul>
            <li>Ease of use with high-level libraries</li>
            <li>Strong community support</li>
            <li>Extensive libraries for various tasks</li>
            <li>Integration capabilities with other languages</li>
        </ul>

        <h2>Disadvantages of Machine Learning Languages</h2>
        <ul>
            <li>Performance limitations for heavy computations</li>
            <li>Learning curve associated with complex concepts</li>
            <li>Dependence on data quality for model performance</li>
            <li>Interpretability issues in complex models</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Machine learning languages are essential in AI and data science, enabling the creation of models that learn from data. Understanding their applications and limitations is crucial for effective utilization in various domains.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

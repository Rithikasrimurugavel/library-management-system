<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Generative AI Overview</title>
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
        <h1>Generative AI Overview</h1>

        <h2>What is Generative AI?</h2>
        <p>Generative AI refers to a class of artificial intelligence models designed to generate new content based on learned patterns from existing data. Unlike traditional AI, which focuses on classification and prediction, generative AI can create text, images, music, and other types of media.</p>

        <h2>Types of Generative AI</h2>
        <ul>
            <li><strong>Text Generation</strong>: Example - Language models like GPT-3 and ChatGPT.</li>
            <li><strong>Image Generation</strong>: Example - Models like DALL-E and Midjourney.</li>
            <li><strong>Audio Generation</strong>: Example - WaveNet.</li>
            <li><strong>Video Generation</strong>: Example - DeepFake and GANs.</li>
        </ul>

        <h2>Purpose of Using Generative AI</h2>
        <ul>
            <li>Content Creation</li>
            <li>Enhancing Creativity</li>
            <li>Data Augmentation</li>
            <li>Personalization</li>
            <li>Simulations</li>
        </ul>

        <h2>Scopes of Generative AI</h2>
        <ul>
            <li>Creative Industries</li>
            <li>Gaming</li>
            <li>Marketing</li>
            <li>Healthcare</li>
            <li>Education</li>
        </ul>

        <h2>Modules of Generative AI with Examples</h2>
        <ul>
            <li><strong>Natural Language Processing (NLP)</strong>: Example - Chatbots (e.g., ChatGPT).</li>
            <li><strong>Computer Vision</strong>: Example - Image generation (e.g., DALL-E).</li>
            <li><strong>Audio Processing</strong>: Example - Text-to-speech (e.g., Google’s WaveNet).</li>
            <li><strong>Generative Adversarial Networks (GANs)</strong>: Example - StyleGAN.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Text Generation:</strong>
                <pre><code>import openai

openai.api_key = 'your-api-key'
response = openai.Completion.create(
    engine="text-davinci-003",
    prompt="Write a short story about a robot.",
    max_tokens=100
)
print(response.choices[0].text.strip())</code></pre>
            </li>
            <li><strong>Image Generation:</strong>
                <pre><code>from PIL import Image
import requests
from io import BytesIO

url = "https://example.com/generated-image.jpg"
response = requests.get(url)
img = Image.open(BytesIO(response.content))
img.show()</code></pre>
            </li>
            <li><strong>Audio Generation:</strong>
                <pre><code>import pyttsx3

engine = pyttsx3.init()
engine.say("Hello, this is a generated voice.")
engine.runAndWait()</code></pre>
            </li>
        </ul>

        <h2>Advantages of Generative AI</h2>
        <ul>
            <li>Creativity Enhancement</li>
            <li>Efficiency</li>
            <li>Personalization</li>
            <li>Data Generation</li>
            <li>Innovation</li>
        </ul>

        <h2>Disadvantages of Generative AI</h2>
        <ul>
            <li>Quality Control</li>
            <li>Ethical Concerns</li>
            <li>Bias in Models</li>
            <li>Dependence on Data</li>
            <li>Complexity</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Generative AI is a rapidly evolving field with vast potential across various industries. While it offers numerous advantages, it also poses ethical and quality challenges that need to be addressed as the technology advances.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

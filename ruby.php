<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ruby Programming Language Overview</title>
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
        <h1>Ruby Programming Language Overview</h1>

        <h2>What is Ruby?</h2>
        <p>Ruby is a dynamic, open-source programming language known for its simplicity and productivity. It emphasizes an elegant syntax that is easy to read and write, making it beginner-friendly.</p>

        <h2>What is Ruby Used For?</h2>
        <ul>
            <li>Web Development: Primarily used for building web applications, especially with the Ruby on Rails framework.</li>
            <li>Software Development: Used for creating desktop applications and tools.</li>
            <li>Scripting: Ideal for automating tasks and writing scripts.</li>
            <li>Data Analysis: Employed in data processing and manipulation.</li>
            <li>Prototyping: Useful for rapidly developing prototypes due to its concise syntax.</li>
        </ul>

        <h2>Key Features of Ruby</h2>
        <ul>
            <li>Object-Oriented: Everything in Ruby is an object.</li>
            <li>Dynamic Typing: No need to specify variable types.</li>
            <li>Garbage Collection: Automatic memory management.</li>
            <li>Readable Syntax: Focuses on human-friendly code.</li>
        </ul>

        <h2>Modules in Ruby</h2>
        <ul>
            <li>Standard Library Modules: Predefined modules like Math, FileUtils, etc.</li>
            <li>Custom Modules: User-defined modules for specific functionality.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Hello World Program:</strong>
                <pre><code>puts 'Hello, World!'</code></pre>
            </li>
            <li><strong>Simple Class Definition:</strong>
                <pre><code>class Dog
  def initialize(name)
    @name = name
  end

  def bark
    "#{@name} says Woof!"
  end
end

my_dog = Dog.new("Buddy")
puts my_dog.bark</code></pre>
            </li>
            <li><strong>Using Modules:</strong>
                <pre><code>module Greetings
  def self.hello(name)
    "Hello, #{name}!"
  end
end

puts Greetings.hello("Alice")</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using Ruby</h2>
        <ul>
            <li>Rapid Development: Ruby's concise syntax allows for quick development.</li>
            <li>Focus on Simplicity: Emphasizes simplicity and productivity.</li>
            <li>Community and Gems: A large community and rich ecosystem provide additional functionality.</li>
        </ul>

        <h2>Advantages of Ruby</h2>
        <ul>
            <li>Readability: Clear and expressive syntax.</li>
            <li>Flexible: Supports multiple programming paradigms.</li>
            <li>Rich Libraries: Extensive libraries (gems) enhance functionality.</li>
            <li>Strong Community: Active community support and documentation.</li>
        </ul>

        <h2>Disadvantages of Ruby</h2>
        <ul>
            <li>Performance: Slower compared to languages like C or Java.</li>
            <li>Memory Consumption: Can consume more memory in large applications.</li>
            <li>Concurrency Issues: Global Interpreter Lock (GIL) can hinder parallel processing.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Ruby is a powerful and flexible programming language that excels in web development and rapid prototyping. While it offers numerous advantages, developers should consider its performance and memory usage in larger applications.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

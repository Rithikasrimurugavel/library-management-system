<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Object-Oriented Programming (OOP) Overview</title>
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
        <h1>Object-Oriented Programming (OOP) Overview</h1>

        <h2>What is OOP?</h2>
        <p>Object-Oriented Programming (OOP) is a programming paradigm based on the concept of "objects," which can contain data and code: data in the form of fields (attributes) and code in the form of procedures (methods). OOP is used to design software that is modular, reusable, and organized.</p>

        <h2>What is OOP Used For?</h2>
        <p>OOP is widely used in software development for:</p>
        <ul>
            <li>Application Development</li>
            <li>Game Development</li>
            <li>Simulation</li>
            <li>Data Management</li>
            <li>User Interface Design</li>
        </ul>

        <h2>Key Concepts of OOP</h2>
        <ul>
            <li><strong>Classes</strong>: Blueprints for creating objects.</li>
            <li><strong>Objects</strong>: Instances of classes.</li>
            <li><strong>Inheritance</strong>: Creating a new class based on an existing class.</li>
            <li><strong>Encapsulation</strong>: Restricting access to some components of an object.</li>
            <li><strong>Polymorphism</strong>: Ability to process objects differently based on their data type or class.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Simple Class Definition:</strong>
                <pre><code>class Dog:
    def __init__(self, name, age):
        self.name = name
        self.age = age

    def bark(self):
        return "Woof!"

my_dog = Dog("Buddy", 3)
print(f"My dog's name is {my_dog.name} and he says {my_dog.bark()}")</code></pre>
            </li>
            <li><strong>Inheritance Example:</strong>
                <pre><code>class Animal:
    def speak(self):
        return "Some sound"

class Cat(Animal):
    def speak(self):
        return "Meow!"

my_cat = Cat()
print(my_cat.speak())  # Output: Meow!</code></pre>
            </li>
            <li><strong>Polymorphism Example:</strong>
                <pre><code>class Bird:
    def fly(self):
        return "Flies high!"

class Penguin(Bird):
    def fly(self):
        return "I can't fly!"

def make_it_fly(bird):
    print(bird.fly())

make_it_fly(Bird())      # Output: Flies high!
make_it_fly(Penguin())   # Output: I can't fly!</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using OOP</h2>
        <ul>
            <li>Modularity: Breaking down complex systems into manageable units.</li>
            <li>Reusability: Classes and methods can be reused across projects.</li>
            <li>Maintainability: Easier to maintain and update code.</li>
            <li>Scalability: Facilitates the development of large systems.</li>
        </ul>

        <h2>Advantages of OOP</h2>
        <ul>
            <li>Encapsulation: Protects object integrity by restricting access to internal states.</li>
            <li>Inheritance: Promotes code reuse and establishes class hierarchies.</li>
            <li>Polymorphism: Enhances flexibility in code.</li>
            <li>Improved Collaboration: Teams can work on different objects simultaneously.</li>
        </ul>

        <h2>Disadvantages of OOP</h2>
        <ul>
            <li>Complexity: Can introduce unnecessary complexity for simple programs.</li>
            <li>Performance Overhead: May incur performance penalties.</li>
            <li>Steeper Learning Curve: Requires understanding of various OOP concepts.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Object-Oriented Programming is a powerful paradigm that helps organize and manage code efficiently, leading to robust and maintainable software solutions.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

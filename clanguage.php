<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>C Language Overview</title>
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
        <h1>C Language Overview</h1>

        <h2>What is C?</h2>
        <p>C is a general-purpose, procedural programming language developed in the early 1970s. It is widely used for system programming, embedded systems, and application development.</p>

        <h2>What is C Used For?</h2>
        <ul>
            <li>System Programming (e.g., Operating systems)</li>
            <li>Embedded Systems (e.g., Microcontrollers)</li>
            <li>Application Development (e.g., Desktop applications)</li>
            <li>Compilers and Interpreters</li>
            <li>Networking Applications</li>
        </ul>

        <h2>Key Modules in C</h2>
        <ul>
            <li><strong>Standard Input Output Library (`<stdio.h>`)</strong>: Functions for input and output.</li>
            <li><strong>Standard Library (`<stdlib.h>`)</strong>: Functions for memory allocation, process control, etc.</li>
            <li><strong>String Handling Library (`<string.h>`)</strong>: Functions for manipulating strings.</li>
            <li><strong>Mathematics Library (`<math.h>`)</strong>: Functions for mathematical computations.</li>
            <li><strong>Time Library (`<time.h>`)</strong>: Functions for handling time and date.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Hello World Program:</strong>
                <pre><code>#include <stdio.h>

int main() {
    printf("Hello, World!\\n");
    return 0;
}</code></pre>
            </li>
            <li><strong>Basic Calculator:</strong>
                <pre><code>#include <stdio.h>

int main() {
    int a, b;
    char operator;

    printf("Enter first number: ");
    scanf("%d", &a);
    printf("Enter operator (+, -, *, /): ");
    scanf(" %c", &operator);
    printf("Enter second number: ");
    scanf("%d", &b);

    switch (operator) {
        case '+':
            printf("%d + %d = %d\\n", a, b, a + b);
            break;
        case '-':
            printf("%d - %d = %d\\n", a, b, a - b);
            break;
        case '*':
            printf("%d * %d = %d\\n", a, b, a * b);
            break;
        case '/':
            if (b != 0)
                printf("%d / %d = %d\\n", a, b, a / b);
            else
                printf("Division by zero is not allowed.\\n");
            break;
        default:
            printf("Invalid operator.\\n");
    }
    return 0;
}</code></pre>
            </li>
            <li><strong>Factorial Calculation:</strong>
                <pre><code>#include <stdio.h>

int factorial(int n) {
    if (n == 0)
        return 1;
    return n * factorial(n - 1);
}

int main() {
    int num;
    printf("Enter a number: ");
    scanf("%d", &num);
    printf("Factorial of %d is %d\\n", num, factorial(num));
    return 0;
}</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using C</h2>
        <ul>
            <li>Efficiency: Low-level access to memory.</li>
            <li>Portability: Can run on different machines.</li>
            <li>Foundation for Other Languages: Influences many modern programming languages.</li>
        </ul>

        <h2>Advantages of C</h2>
        <ul>
            <li>Performance: Fast and efficient.</li>
            <li>Rich Library Support: Extensive libraries available.</li>
            <li>Flexibility: Offers pointers and memory manipulation.</li>
            <li>Wide Usage: Popular across various domains.</li>
            <li>Community Support: Large community and resources available.</li>
        </ul>

        <h2>Disadvantages of C</h2>
        <ul>
            <li>Complexity: Steeper learning curve for beginners.</li>
            <li>Manual Memory Management: Can lead to errors like memory leaks.</li>
            <li>Lack of Modern Features: No built-in support for OOP or exception handling.</li>
            <li>Portability Issues: Differences in compilers can cause issues.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>C is a powerful programming language with a wide range of applications. While it offers many advantages, it also presents challenges that developers must navigate.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

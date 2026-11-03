<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Microprocessors and Microcontrollers Overview</title>
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
        <h1>Microprocessors and Microcontrollers Overview</h1>

        <h2>What is a Microprocessor?</h2>
        <p>A microprocessor is a central processing unit (CPU) on a single integrated circuit (IC) that performs arithmetic and logic operations, controls other components, and processes data. It acts as the brain of the computer system.</p>

        <h2>What is a Microcontroller?</h2>
        <p>A microcontroller is a compact integrated circuit designed to govern a specific operation in an embedded system. It includes a processor core, memory, and programmable input/output peripherals.</p>

        <h2>What is it Used For?</h2>
        <ul>
            <li><strong>Microprocessors</strong>: Personal computers, laptops, servers, high-performance computing systems.</li>
            <li><strong>Microcontrollers</strong>: Embedded systems (e.g., home appliances, automotive controls), robotics, medical devices, IoT devices.</li>
        </ul>

        <h2>Modules in Microprocessors and Microcontrollers</h2>
        <ul>
            <li>CPU (Central Processing Unit)</li>
            <li>Memory (RAM, ROM, Flash Memory)</li>
            <li>Input/Output Ports</li>
            <li>Timers and Counters</li>
            <li>ADC (Analog-to-Digital Converter)</li>
            <li>Communication Interfaces (UART, SPI, I2C)</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Microprocessor Program (C language for simple arithmetic):</strong>
                <pre><code>#include &lt;stdio.h&gt;

int main() {
    int a = 10, b = 20, sum;
    sum = a + b;
    printf("Sum is: %d\\n", sum);
    return 0;
}</code></pre>
            </li>
            <li><strong>Microcontroller Program (Arduino to blink an LED):</strong>
                <pre><code>void setup() {
    pinMode(13, OUTPUT); // Set pin 13 as output
}

void loop() {
    digitalWrite(13, HIGH); // Turn on the LED
    delay(1000);            // Wait for 1 second
    digitalWrite(13, LOW);  // Turn off the LED
    delay(1000);            // Wait for 1 second
}</code></pre>
            </li>
            <li><strong>Microcontroller Program (Read a Button Input):</strong>
                <pre><code>const int buttonPin = 2;    // Button connected to pin 2
const int ledPin = 13;      // LED connected to pin 13

void setup() {
    pinMode(buttonPin, INPUT); // Set button pin as input
    pinMode(ledPin, OUTPUT);   // Set LED pin as output
}

void loop() {
    int buttonState = digitalRead(buttonPin);
    if (buttonState == HIGH) {
        digitalWrite(ledPin, HIGH); // Turn LED on
    } else {
        digitalWrite(ledPin, LOW);  // Turn LED off
    }
}</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using Microprocessors and Microcontrollers</h2>
        <ul>
            <li><strong>Microprocessors</strong>: Perform complex calculations and data processing; serve as the main processing unit in computers and servers.</li>
            <li><strong>Microcontrollers</strong>: Automate tasks in embedded systems; control devices and processes in real-time environments.</li>
        </ul>

        <h2>Advantages</h2>
        <ul>
            <li><strong>Microprocessors</strong>: High processing power and speed; capability to handle complex tasks; versatile for a wide range of applications.</li>
            <li><strong>Microcontrollers</strong>: Cost-effective for dedicated applications; energy-efficient; compact size allows integration in smaller devices; designed for real-time operations.</li>
        </ul>

        <h2>Disadvantages</h2>
        <ul>
            <li><strong>Microprocessors</strong>: Higher cost compared to microcontrollers for simple tasks; generally requires more power.</li>
            <li><strong>Microcontrollers</strong>: Limited processing power and memory; less flexibility for complex applications; debugging can be more challenging.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Microprocessors and microcontrollers are integral components of modern electronics, each serving distinct purposes and applications. Understanding their differences and applications is crucial for anyone working in electronics and embedded system design.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

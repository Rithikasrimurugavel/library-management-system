<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Embedded Systems Overview</title>
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
        <h1>Embedded Systems Overview</h1>

        <h2>What is Embedded Systems?</h2>
        <p>Embedded systems are specialized computing systems designed to perform dedicated functions or tasks within larger systems. They combine hardware and software to achieve specific control functions, often with real-time constraints.</p>

        <h2>What is it Used For?</h2>
        <ul>
            <li><strong>Consumer Electronics</strong>: Televisions, washing machines, and cameras.</li>
            <li><strong>Automotive Systems</strong>: Engine control units, airbag systems, and infotainment systems.</li>
            <li><strong>Medical Devices</strong>: Heart rate monitors, imaging systems, and infusion pumps.</li>
            <li><strong>Industrial Automation</strong>: Robotics, process control, and machine monitoring.</li>
            <li><strong>Home Automation</strong>: Smart thermostats, security systems, and lighting control.</li>
        </ul>

        <h2>Modules in Embedded Systems</h2>
        <ul>
            <li><strong>Microcontroller or Microprocessor</strong>: The core processing unit (e.g., ARM, PIC, AVR).</li>
            <li><strong>Memory</strong>: RAM and ROM for data storage and program execution.</li>
            <li><strong>Input/Output Interfaces</strong>: For interaction with the external environment (e.g., GPIO, UART, SPI).</li>
            <li><strong>Sensors and Actuators</strong>: Devices that collect data and perform actions (e.g., temperature sensors, motors).</li>
            <li><strong>Power Supply</strong>: Provides the necessary power for the operation of the system.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Blink an LED:</strong>
                <pre><code>#include &lt;avr/io.h&gt;
#include &lt;util/delay.h&gt;

int main(void) {
    // Set pin PB0 as output
    DDRB |= (1 &lt;&lt; PB0);
    
    while (1) {
        PORTB ^= (1 &lt;&lt; PB0); // Toggle LED
        _delay_ms(1000);     // Wait for 1 second
    }
}
                </code></pre>
            </li>
            <li><strong>Temperature Sensor Reading (Pseudo Code):</strong>
                <pre><code>initialize_sensor()
while true:
    temperature = read_temperature()
    if temperature > threshold:
        activate_cooling_system()
    delay(500) // wait for 500 ms
                </code></pre>
            </li>
            <li><strong>Simple Button Press Detection:</strong>
                <pre><code>#include &lt;avr/io.h&gt;

int main(void) {
    // Set pin PD2 as input and pin PD3 as output
    DDRD &= ~(1 &lt;&lt; PD2);
    DDRD |= (1 &lt;&lt; PD3);

    while (1) {
        if (PIND & (1 &lt;&lt; PD2)) { // Check if button is pressed
            PORTD |= (1 &lt;&lt; PD3); // Turn on LED
        } else {
            PORTD &= ~(1 &lt;&lt; PD3); // Turn off LED
        }
    }
}
                </code></pre>
            </li>
        </ul>

        <h2>Purpose of Using Embedded Systems</h2>
        <ul>
            <li>Task Automation: Performing repetitive tasks efficiently.</li>
            <li>Real-Time Operation: Responding to events in real time.</li>
            <li>Cost Efficiency: Reducing the overall cost of systems by integrating functionality.</li>
            <li>Compact Design: Allowing for smaller and lighter products.</li>
            <li>Reliability: Ensuring stable performance under specific conditions.</li>
        </ul>

        <h2>Advantages of Embedded Systems</h2>
        <ul>
            <li>Efficiency: Optimized for specific tasks, leading to faster execution and lower power consumption.</li>
            <li>Cost-Effective: Often cheaper to produce than general-purpose computers.</li>
            <li>Reliability: Designed for a specific function, leading to more stable and predictable behavior.</li>
            <li>Real-Time Operation: Capable of processing data and responding to inputs instantly.</li>
        </ul>

        <h2>Disadvantages of Embedded Systems</h2>
        <ul>
            <li>Limited Resources: Typically have less processing power and memory compared to general-purpose systems.</li>
            <li>Difficulty in Upgrading: Upgrading embedded systems can be challenging and costly.</li>
            <li>Debugging Challenges: Debugging embedded software can be more complex due to hardware constraints.</li>
            <li>Vendor Lock-In: Often tied to specific hardware, which can limit future options and flexibility.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Embedded systems play a crucial role in modern technology, enabling the functionality of countless devices we use daily. Their specialized nature provides efficiency and reliability but also presents challenges in terms of resource limitations and upgradeability.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

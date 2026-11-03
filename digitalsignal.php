<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Digital Signal Processing Overview</title>
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
        <h1>Digital Signal Processing Overview</h1>

        <h2>What is Digital Signal Processing?</h2>
        <p>Digital Signal Processing (DSP) refers to the manipulation of signals (such as audio, video, or other data) after they have been converted into a digital format. DSP employs algorithms to perform operations on these signals to enhance, analyze, or transform them.</p>

        <h2>What is it Used For?</h2>
        <p>Digital Signal Processing is used in various applications, including:</p>
        <ul>
            <li><strong>Audio Processing</strong>: Noise reduction, audio compression, and effects processing.</li>
            <li><strong>Image Processing</strong>: Image enhancement, compression, and recognition.</li>
            <li><strong>Communications</strong>: Modulation, error detection, and correction.</li>
            <li><strong>Control Systems</strong>: Real-time control and monitoring.</li>
            <li><strong>Medical Applications</strong>: Signal analysis in medical imaging and diagnostics.</li>
        </ul>

        <h2>Modules in Digital Signal Processing</h2>
        <ul>
            <li><strong>Sampling</strong>: Converting continuous signals into discrete form.</li>
            <li><strong>Quantization</strong>: Approximating continuous signal values to finite levels.</li>
            <li><strong>Filtering</strong>: Removing unwanted components from a signal.</li>
            <li><strong>Transformations</strong>: Techniques such as Fourier Transform for frequency analysis.</li>
            <li><strong>Signal Reconstruction</strong>: Converting digital signals back to analog form.</li>
        </ul>

        <h2>Sample Programs</h2>
        <ul>
            <li><strong>Python Example: Low-pass Filter</strong>
                <pre><code>import numpy as np
import matplotlib.pyplot as plt
from scipy.signal import butter, lfilter

def butter_lowpass(cutoff, fs, order=5):
    nyq = 0.5 * fs
    normal_cutoff = cutoff / nyq
    b, a = butter(order, normal_cutoff, btype='low', analog=False)
    return b, a

def lowpass_filter(data, cutoff, fs, order=5):
    b, a = butter_lowpass(cutoff, fs, order=order)
    y = lfilter(b, a, data)
    return y

fs = 500.0
cutoff = 50.0
T = 1.0 / fs
x = np.linspace(0.0, 1.0, int(fs), endpoint=False)
a = 0.1 * np.sin(2 * np.pi * 1.2 * x) + 0.5 * np.sin(2 * np.pi * 3.0 * x)

y = lowpass_filter(a, cutoff, fs)

plt.plot(x, a, label='Original signal')
plt.plot(x, y, label='Filtered signal')
plt.legend()
plt.title('Low-pass Filter Example')
plt.xlabel('Time [s]')
plt.grid()
plt.show()</code></pre>
            </li>
            <li><strong>MATLAB Example: FFT</strong>
                <pre><code>% Sample data
fs = 500; % Sampling frequency
t = 0:1/fs:1-1/fs; % Time vector
x = sin(2*pi*50*t) + sin(2*pi*120*t); % Sample signal

% Compute FFT
y = fft(x);
f = (0:length(y)-1)*fs/length(y); % Frequency vector

% Plot results
plot(f, abs(y))
title('Magnitude Spectrum')
xlabel('Frequency (Hz)')
ylabel('|Y(f)|')
xlim([0 fs/2]) % Show only positive frequencies
</code></pre>
            </li>
        </ul>

        <h2>Purpose of Using Digital Signal Processing</h2>
        <p>The primary purposes of using DSP include enhancing signal quality and information extraction, efficiently representing and manipulating signals for various applications, and enabling real-time processing for applications like audio and video.</p>

        <h2>Advantages of Digital Signal Processing</h2>
        <ul>
            <li>Flexibility: Algorithms can be easily modified or updated.</li>
            <li>Precision: Higher accuracy due to digital computations.</li>
            <li>Noise Immunity: Digital signals are less susceptible to noise.</li>
            <li>Storage and Transmission: Easier to store and transmit digital signals.</li>
        </ul>

        <h2>Disadvantages of Digital Signal Processing</h2>
        <ul>
            <li>Complexity: DSP systems can be complex to design and implement.</li>
            <li>Latency: Some algorithms introduce delays, which may be critical in real-time applications.</li>
            <li>Quantization Error: Converting signals into digital form can introduce errors.</li>
            <li>Resource Intensive: Requires more computational resources compared to analog processing.</li>
        </ul>

        <h2>Conclusion</h2>
        <p>Digital Signal Processing plays a crucial role in modern technology, facilitating the enhancement and analysis of various types of signals. Understanding its principles and applications is essential for engineers and researchers in fields like telecommunications, audio engineering, and multimedia.</p>
    </div>
    <a href="onlinebooks.php"><button class="back-button">Back</button></a>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP Calculator</title>
    <link rel="stylesheet" href="sip.css">
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <a href="index.html">Shri Hanumat Capital Services Private Limited</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href=" our services.php">Our Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php" >Login</a></li>

        </ul>
        <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>
    <div class="container">
        <h2>SIP Calculator</h2>

        <div class="calculator">
            <label>Current Age:</label>
            <input type="number" id="currentAge" placeholder="20" min="1" max="100" step="1">
            
            <label>Monthly Investment (₹):</label>
            <input type="number" id="monthlyInvestment" placeholder="25000" min="1000" step="1000">
            
            <label>Expected Return Rate (p.a.) %:</label>
            <input type="number" id="expectedReturnRate" placeholder="12" min="1" max="30" step="0.5">
            
            <label>Time Period (Years):</label>
            <input type="number" id="timePeriod" placeholder="10" min="1" max="50">

            <button onclick="calculateSIP()">Calculate</button>
        </div>

        <div class="results">
            <h3>Results</h3>
            <p>Current Age: <span id="currentAgeResult"></span></p>
            <p>Age at End of Investment: <span id="ageAtEnd"></span></p>
            <p>Invested Amount: ₹<span id="investedAmount"></span></p>
            <p>Estimated Returns: ₹<span id="estimatedReturns"></span></p>
            <p>Total Value: ₹<span id="totalValue"></span></p>
        </div>

        <canvas id="sipChart" width="100" height="100"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="sip.js"></script>
    <script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }

    
</body>
</html>

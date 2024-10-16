<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retirement Calculator</title>
    <link rel="stylesheet" href="retirement.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <h2>Shri Hanumat Capital Services Private Limited</h2>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About Us</a></li>
                <li><a href="our_services.php">Our Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        </div>
    </nav>
    
    <div class="container2">
        <h1>Retirement Calculator</h1>
        <div class="inputs">
            <label for="currentAge">Current Age:</label>
            <input type="number" id="currentAge" min="0" max="100"placeholder="30">
            
            <label for="retirementAge">Retirement Age:</label>
            <input type="number" id="retirementAge" min="0" max="100"placeholder="65">
            
            <label for="investmentAmount">Investment Amount ($):</label>
            <input type="number" id="investmentAmount" min="0"placeholder="10000">
            
            <label for="interestRate">Interest Rate (%):</label>
            <input type="number" id="interestRate" min="0" max="100" step="0.1"placeholder="5">
            
            <button id="calculateBtn">Calculate</button>
        </div>
        <canvas id="growthBarChart"></canvas>
    </div>

    
        <script>
    let growthBarChart; // Declare the chart variable outside the function for global access

    document.getElementById('calculateBtn').addEventListener('click', function() {
        const currentAge = parseInt(document.getElementById('currentAge').value);
        const retirementAge = parseInt(document.getElementById('retirementAge').value);
        const investmentAmount = parseFloat(document.getElementById('investmentAmount').value);
        const interestRate = parseFloat(document.getElementById('interestRate').value) / 100;

        const yearsToRetirement = retirementAge - currentAge;
        const labels = [];
        const data = [];

        for (let year = 0; year <= yearsToRetirement; year++) {
            labels.push(currentAge + year);
            const futureValue = investmentAmount * Math.pow(1 + interestRate, year);
            data.push(futureValue);
        }

        
        const barCtx = document.getElementById('growthBarChart').getContext('2d');

                if (growthBarChart) {
            growthBarChart.destroy();
        }

        growthBarChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Investment Growth (Bar)',
                    data: data,
                    backgroundColor: 'rgba(255, 255, 255, 0.6)', 
                    borderColor: 'rgba(255, 255, 255, 1)', 
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Age',
                            color: 'white' 
                        },
                        ticks: {
                            color: 'white'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Amount (₹)',
                            color: 'white' 
                        },
                        ticks: {
                            color: 'white' 
                        },
                        beginAtZero: true 
                    }
                },
                plugins: {
                    legend: {
                        position: 'top', 
                        labels: {
                            color: 'white' 
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const label = tooltipItem.dataset.label || '';
                                const value = tooltipItem.raw;
                                return `${label}: ₹${value.toFixed(2)}`; 
                            }
                        },
                        titleColor: 'white', 
                        bodyColor: 'white' 
                    }
                }
            }
        });
    });

    </script>
     <script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growth Chart - Shri Hanumat Capital Services</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <link rel="stylesheet" href="plain.css">
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <h2>START YOUR SIP</h2>

        <!-- Investment Settings -->
        <label for="currentAge">Current Age: </label>
        <input type="number" id="currentAge" value="30" oninput="updateChart()" />

        <label for="investmentAmount">Initial Investment (₹): </label>
        <input type="number" id="investmentAmount" value="50000" oninput="updateChart()" />

        <label for="interestRate">Annual Interest Rate (%): </label>
        <input type="number" id="interestRate" value="8" step="0.1" oninput="updateChart()" /><br><br>

        <label for="years">Number of Years: </label> 
        <input type="number" id="years" value="10" oninput="updateChart()" />

        <!-- Canvas for Chart -->
        <canvas id="growthChart"></canvas>

        <!-- Export Button -->
        <button id="exportBtn" onclick="exportChart()">Export Chart as Image</button>
    </div>

    <script>
        const ctx = document.getElementById('growthChart').getContext('2d');

        // Function to calculate compound growth
        function calculateGrowth(principal, rate, years) {
            let data = [];
            for (let i = 0; i <= years; i++) {
                let value = principal * Math.pow((1 + rate / 100), i);
                data.push(value.toFixed(2));
            }
            return data;
        }

        // Initial Values
        let currentAge = document.getElementById("currentAge").value;
        let initialInvestment = document.getElementById("investmentAmount").value;
        let interestRate = document.getElementById("interestRate").value;
        let years = document.getElementById("years").value;

        // Create the Chart
        let growthChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: Array.from({length: parseInt(years) + 1}, (v, k) => (parseInt(currentAge) + k).toString()), // Age labels
                datasets: [{
                    label: 'Investment Growth (₹)',
                    data: calculateGrowth(initialInvestment, interestRate, years),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'pink',
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Age'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Investment Value (₹)'
                        },
                        beginAtZero: true
                    }
                },
                animation: {
                    duration: 2000,  // Animation duration in milliseconds
                    easing: 'easeInOutQuart',  // Animation easing function
                }
            }
        });

        // Update the chart when inputs change
        function updateChart() {
            currentAge = document.getElementById("currentAge").value;
            initialInvestment = document.getElementById("investmentAmount").value;
            interestRate = document.getElementById("interestRate").value;
            years = document.getElementById("years").value;

        
            growthChart.data.labels = Array.from({length: parseInt(years) + 1}, (v, k) => (parseInt(currentAge) + k).toString());
            growthChart.data.datasets[0].data = calculateGrowth(initialInvestment, interestRate, years);
            growthChart.update();
        }

        // Export chart as an image
        function exportChart() {
            // Create a link element
            let link = document.createElement('a');
            link.href = growthChart.toBase64Image();  // Get the image data URL from the chart
            link.download = 'investment-growth-chart.png';  // Specify the download file name

            // Programmatically click the link to trigger the download
            link.click();
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        #chart-container {
            margin-top: 30px;
            width: 100%;
        }
        canvas {
            max-width: 100%;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Investment Calculator</h2>
    
    <label for="lumpSum">Lump Sum Investment (Monthly)</label>
    <input type="number" id="lumpSum" placeholder="Enter monthly lump sum amount">

    <label for="sip">SIP Amount (Monthly)</label>
    <input type="number" id="sip" placeholder="Enter SIP amount">

    <label for="rateOfReturn">Expected Rate of Return (%)</label>
    <input type="number" id="rateOfReturn" placeholder="Enter expected rate of return">

    <label for="trailRate">Trail Rate (%)</label>
    <input type="number" id="trailRate" placeholder="Enter trail rate">

    <label for="timePeriod">Time Period (Years)</label>
    <input type="number" id="timePeriod" placeholder="Enter time period in years">

    <button onclick="calculateInvestment()">Calculate</button>

    <div id="chart-container">
        <canvas id="investmentChart"></canvas>
    </div>
</div>

<!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    function calculateInvestment() {
        const lumpSum = parseFloat(document.getElementById('lumpSum').value);
        const sip = parseFloat(document.getElementById('sip').value);
        const rateOfReturn = parseFloat(document.getElementById('rateOfReturn').value) / 100;
        const trailRate = parseFloat(document.getElementById('trailRate').value) / 100;
        const timePeriod = parseFloat(document.getElementById('timePeriod').value);

        if (isNaN(lumpSum) || isNaN(sip) || isNaN(rateOfReturn) || isNaN(trailRate) || isNaN(timePeriod)) {
            alert('Please fill all fields with valid values.');
            return;
        }

        const months = timePeriod * 12;
        let totalInvestment = 0;
        let sipInvestment = 0;
        let lumpSumInvestment = 0;

        // Calculate lump sum investment growth
        for (let i = 0; i < months; i++) {
            lumpSumInvestment += lumpSum * Math.pow((1 + rateOfReturn / 12), i);
        }

        // Calculate SIP investment growth
        for (let i = 0; i < months; i++) {
            sipInvestment += sip * Math.pow((1 + rateOfReturn / 12), months - i);
        }

        totalInvestment = lumpSumInvestment + sipInvestment;
        const trailAmount = totalInvestment * trailRate;
        const finalAmount = totalInvestment + trailAmount;

        // Draw the graph
        drawChart(finalAmount, lumpSumInvestment, sipInvestment, trailAmount);
    }

    function drawChart(finalAmount, lumpSumInvestment, sipInvestment, trailAmount) {
        const ctx = document.getElementById('investmentChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Lump Sum Growth', 'SIP Growth', 'Trail Amount', 'Final Amount'],
                datasets: [{
                    data: [lumpSumInvestment, sipInvestment, trailAmount, finalAmount],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                }
            }
        });
    }
</script>

</body>
</html>

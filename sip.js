function calculateSIP() {
    let currentAge = parseFloat(document.getElementById('currentAge').value);
    let monthlyInvestment = parseFloat(document.getElementById('monthlyInvestment').value);
    let expectedReturnRate = parseFloat(document.getElementById('expectedReturnRate').value) / 100;
    let timePeriod = parseFloat(document.getElementById('timePeriod').value);

    let months = timePeriod * 12;
    let rateOfReturn = expectedReturnRate / 14;

    // SIP calculation formula
    let investedAmount = monthlyInvestment * months;
    let futureValue = monthlyInvestment * (((Math.pow(1 + rateOfReturn, months)) - 1) / rateOfReturn) * (1 + rateOfReturn);
    let estimatedReturns = futureValue - investedAmount;
    let totalValue = futureValue;

    // Calculate age at the end of the investment period
    let ageAtEnd = currentAge + timePeriod;

    // Display the calculated results
    document.getElementById('currentAgeResult').innerText = currentAge;
    document.getElementById('ageAtEnd').innerText = ageAtEnd;
    document.getElementById('investedAmount').innerText = investedAmount.toFixed(2);
    document.getElementById('estimatedReturns').innerText = estimatedReturns.toFixed(2);
    document.getElementById('totalValue').innerText = totalValue.toFixed(2);

    // Update the chart with the new data
    updateChart(investedAmount, estimatedReturns);
}

// Function to update the chart using Chart.js
function updateChart(investedAmount, estimatedReturns) {
    const ctx = document.getElementById('sipChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Invested Amount', 'Estimated Returns'],
            datasets: [{
                data: [investedAmount, estimatedReturns],
                backgroundColor: ['#36A2EB', '#FF6384'],
                hoverOffset: 4
            }]
        }
    });
}

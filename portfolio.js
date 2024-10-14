function showPortfolio(portfolioType) {
    const detailsContent = document.getElementById('details-content');
    const investmentGraph = document.getElementById('investment-graph');
    const graphCanvas = document.getElementById('graphCanvas');

    // Clear previous content
    detailsContent.innerHTML = '';
    investmentGraph.style.display = 'none'; // Hide graph by default

    let content = '';

    switch (portfolioType) {
        case 'growth':
            content = `
                <h4>Growth Portfolio</h4>
                <p>This portfolio is designed for investors looking for long-term capital appreciation. We focus on high-growth stocks in various sectors, providing an aggressive investment strategy.</p>
                <h5>Key Features:</h5>
                <ul>
                    <li>High potential for returns</li>
                    <li>Diversification across growth sectors</li>
                    <li>Active portfolio management</li>
                </ul>`;
            break;
        case 'income':
            content = `
                <h4>Income Portfolio</h4>
                <p>This portfolio aims to generate regular income for investors. We focus on dividend-paying stocks and bonds, ideal for those seeking stable income streams.</p>
                <h5>Key Features:</h5>
                <ul>
                    <li>Steady income generation</li>
                    <li>Focus on dividend stocks and bonds</li>
                    <li>Lower volatility compared to growth portfolios</li>
                </ul>`;
            break;
        case 'balanced':
            content = `
                <h4>Balanced Portfolio</h4>
                <p>This portfolio seeks a balance between growth and income. We invest in a mix of stocks and bonds to provide both capital appreciation and income generation.</p>
                <h5>Key Features:</h5>
                <ul>
                    <li>Balanced risk and return</li>
                    <li>Investment in diverse asset classes</li>
                    <li>Regular review and rebalancing</li>
                </ul>`;
            break;
        default:
            content = '<p>Portfolio details not available.</p>';
    }

    detailsContent.innerHTML = content;

    // Simulate an investment graph (Replace this with actual graph logic)
    investmentGraph.style.display = 'block'; // Show the investment graph section
    const ctx = graphCanvas.getContext('2d');
    graphCanvas.width = 400; // Set the width of the canvas
    graphCanvas.height = 200; // Set the height of the canvas

    // Dummy data for the graph (You can replace this with actual data)
    const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    const data = [10, 15, 7, 12, 25, 30];

    // Clear the previous graph
    ctx.clearRect(0, 0, graphCanvas.width, graphCanvas.height);

    // Draw a simple line graph
    ctx.beginPath();
    ctx.moveTo(0, graphCanvas.height - data[0]); // Start point

    for (let i = 1; i < data.length; i++) {
        ctx.lineTo((i / (data.length - 1)) * graphCanvas.width, graphCanvas.height - data[i]);
    }

    ctx.strokeStyle = '#007BFF';
    ctx.lineWidth = 2;
    ctx.stroke();
    ctx.closePath();
}
// Include Chart.js (add this line in your HTML head section)
// <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

function showPortfolio(portfolioType) {
    const detailsContent = document.getElementById('details-content');
    const investmentGraph = document.getElementById('investment-graph');
    const graphCanvas = document.getElementById('graphCanvas');

    // Clear previous content
    detailsContent.innerHTML = '';
    investmentGraph.style.display = 'none'; // Hide graph by default

    let content = '';

    switch (portfolioType) {
        case 'growth':
            content = `
                <h4>Growth Portfolio</h4>
                <p>This portfolio is designed for investors looking for long-term capital appreciation. We focus on high-growth stocks in various sectors, providing an aggressive investment strategy.</p>
                <h5>Key Features:</h5>
                <ul>
                    <li>High potential for returns</li>
                    <li>Diversification across growth sectors</li>
                    <li>Active portfolio management</li>
                </ul>`;
            break;
        case 'income':
            content = `
                <h4>Income Portfolio</h4>
                <p>This portfolio aims to generate regular income for investors. We focus on dividend-paying stocks and bonds, ideal for those seeking stable income streams.</p>
                <h5>Key Features:</h5>
                <ul>
                    <li>Steady income generation</li>
                    <li>Focus on dividend stocks and bonds</li>
                    <li>Lower volatility compared to growth portfolios</li>
                </ul>`;
            break;
        case 'balanced':
            content = `
                <h4>Balanced Portfolio</h4>
                <p>This portfolio seeks a balance between growth and income. We invest in a mix of stocks and bonds to provide both capital appreciation and income generation.</p>
                <h5>Key Features:</h5>
                <ul>
                    <li>Balanced risk and return</li>
                    <li>Investment in diverse asset classes</li>
                    <li>Regular review and rebalancing</li>
                </ul>`;
            break;
        default:
            content = '<p>Portfolio details not available.</p>';
    }

    detailsContent.innerHTML = content;

    // Show the investment graph section
    investmentGraph.style.display = 'block'; 

    // Prepare data for the chart
    const chartData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Investment Growth',
            data: getRandomData(portfolioType), // Use a function to get random data for demo purposes
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Create the chart
    const myChart = new Chart(graphCanvas, {
        type: 'line', // Change to 'bar', 'pie', etc. for different types
        data: chartData,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Function to generate random data for demonstration
function getRandomData(portfolioType) {
    switch (portfolioType) {
        case 'growth':
            return [10, 20, 30, 40, 50, 60]; // Simulated data for growth portfolio
        case 'income':
            return [15, 25, 35, 30, 45, 50]; // Simulated data for income portfolio
        case 'balanced':
            return [20, 30, 25, 35, 50, 60]; // Simulated data for balanced portfolio
        default:
            return [0, 0, 0, 0, 0, 0];
    }
}
const myChart = new Chart(graphCanvas, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Investment Growth',
            data: [10, 20, 30, 40, 50, 60],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 2,
            fill: true
        }]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Months'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Investment Value'
                }
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'top'
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return `Investment: $${tooltipItem.raw}`; // Custom tooltip
                    }
                }
            }
        },
        animation: {
            duration: 500,
            easing: 'easeInOutQuart'
        }
    }
});

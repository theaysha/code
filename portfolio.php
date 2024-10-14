<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Management - Shri Hanumat Capital Services</title>
    <link rel="stylesheet" href="portfolio.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    

</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Shri Hanumat Capital</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#portfolio">Portfolio Management</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Manage Your Investments Wisely</h2>
            <p>Your trusted partner in portfolio management services.</p>
        </section>

        <section id="portfolio">
            <h3>Our Investment Portfolios</h3>
            <div class="portfolio-card" onclick="showPortfolio('growth')">
                <h4>Growth Portfolio</h4>
                <p>Invest in high-growth stocks and assets for maximum capital appreciation.</p>
            </div>
            <div class="portfolio-card" onclick="showPortfolio('income')">
                <h4>Income Portfolio</h4>
                <p>Focus on dividend-paying stocks and bonds for steady income generation.</p>
            </div>
            <div class="portfolio-card" onclick="showPortfolio('balanced')">
                <h4>Balanced Portfolio</h4>
                <p>A mix of growth and income assets to achieve capital appreciation and income.</p>
            </div>
        </section>

        <section id="portfolio-details" class="portfolio-details">
            <h3>Portfolio Details</h3>
            <div id="details-content"></div>
            <div id="investment-graph" class="investment-graph" style="display: none;">
                <!-- Placeholder for investment graph -->
                <canvas id="graphCanvas"></canvas>
            </div>
        </section>

        <section id="about">
            <h3>About Us</h3>
            <p>Shri Hanumat Capital Services is dedicated to providing expert investment advisory services. Our team of professionals works tirelessly to ensure you make informed decisions to secure your financial future.</p>
        </section>

        <section id="contact">
            <h3>Contact Us</h3>
            <form id="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Shri Hanumat Capital Services Private Limited. All rights reserved.</p>
    </footer>
    <section id="portfolio-details" class="portfolio-details">
    <h3>Portfolio Details</h3>
    <div id="details-content"></div>
    <div id="investment-graph" class="investment-graph" style="display: none;">
        <!-- Chart.js canvas for the investment graph -->
        <canvas id="graphCanvas"></canvas>
    </div>
</section>



    <script src="portfolio.js"></script>
</body>

</html>

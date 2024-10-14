<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Advisory - Shri Hanumat Capital Services</title>
    <link rel="stylesheet" href="invest.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Shri Hanumat Capital Services Private Limited</h1>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="our services.php">Our Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <main>
    <section id="services">
    <h3>Our Services</h3>
    <div class="service-card" onclick="toggleDetails('portfolio-details')">
        <h4>Portfolio Management</h4>
        <p>We provide personalized portfolio management tailored to your financial goals.</p>
        <div class="details" id="portfolio-details" style="display: none;">
            <p>Detailed portfolio management services, including asset allocation and risk management.</p>
        </div>
    </div>
    <div class="service-card" onclick="toggleDetails('financial-details')">
        <h4>Financial Planning</h4>
        <p>Our experts help you create a comprehensive financial plan for your future.</p>
        <div class="details" id="financial-details" style="display: none;">
            <p>Comprehensive planning including retirement, savings, and tax strategies.</p>
        </div>
    </div>
    <div class="service-card" onclick="toggleDetails('market-details')">
        <h4>Market Analysis</h4>
        <p>Stay ahead with our detailed market analysis and insights.</p>
        <div class="details" id="market-details" style="display: none;">
            <p>In-depth analysis of market trends and investment opportunities.</p>
        </div>
    </div>
</section>

<section id="facilities">
    <h3>Investment Facilities</h3>
    <div class="facility-card" onclick="toggleDetails('stocks-details')">
        <h4>Stocks and Bonds</h4>
        <p>Access a wide range of investment options including stocks and bonds tailored for your portfolio.</p>
        <div class="details" id="stocks-details" style="display: none;">
            <p>Invest in various stocks and bonds to build a diversified portfolio.</p>
        </div>
    </div>
    <div class="facility-card" onclick="toggleDetails('mutual-funds-details')">
        <h4>Mutual Funds</h4>
        <p>Invest in mutual funds managed by experienced professionals to achieve your financial goals.</p>
        <div class="details" id="mutual-funds-details" style="display: none;">
            <p>Options include equity funds, debt funds, and hybrid funds for diverse investment strategies.</p>
        </div>
    </div>
    <div class="facility-card" onclick="toggleDetails('real-estate-details')">
        <h4>Real Estate</h4>
        <p>Explore lucrative real estate investment opportunities to diversify your portfolio.</p>
        <div class="details" id="real-estate-details" style="display: none;">
            <p>Invest in residential and commercial properties for capital appreciation.</p>
        </div>
    </div>
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

    <script src="script.js"></script>
</body>

</html>

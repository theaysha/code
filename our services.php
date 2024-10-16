<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Shri Hanumat Capital Services </title>
    <link rel="stylesheet" href="style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="index.html">Shri Hanumat Capital Services Private Limited</a>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="#" class="active">Our Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="menu-toggle">&#9776;</div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Our Financial Services</h1>
            <p>Expert solutions for your financial future.</p>
            <a href="#services" class="cta-btn">Explore Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2>What We Offer</h2>
        <p><b>At Shri Hanumat Capital Services Pvt. Ltd.</b>, we offer a broad range of solutions to help you achieve your financial goals.</p>

        <div class="service-grid">
            <a href="invest.php"><div class="service-card" id="service1"></a>
                <div class="icon">&#128202;</div>
                <h3>Investment Advisory</h3>
                
               <a href="invest.php"> <p>Personalized advice to optimize your investments for maximum growth and stability.</p></a>
            </div>

            <div class="service-card" id="service2">
                <div class="icon">&#128200;</div>
                <h3>Portfolio Management</h3>
                <a href="portfolio.php"><p>Professional portfolio services that balance risk with returns for optimal performance.</p></a>
            </div>

            <div class="service-card" id="service3">
                <div class="icon">&#128181;</div>
                <h3>Financial Planning</h3>
                <p>Comprehensive financial planning to secure your future, from retirement to wealth management.</p>
            </div>

            <div class="service-card" id="service4">
                <div class="icon">&#128196;</div>
                <h3>Tax Planning</h3>
                <p>Smart tax strategies to help you minimize liabilities and enhance wealth growth.</p>
            </div>

            <div class="service-card" id="service5">
                <div class="icon">&#9889;</div>
                <h3>Risk Management</h3>
                <p>Identify, assess, and mitigate financial risks to protect your assets and investments.</p>
            </div>
        </div>
    </section>

    <!-- Dynamic Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h3>Shri Hanumat Capital Services Private Limited</h3>
                <p>Your trusted partner in financial success.</p>

                <ul class="socials">
                <li><a href="https://www.facebook.com/share/JaFez9VAptHvSKux/"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="https://x.com/services37736?t=1p9mH_NBXTFVBquX6vAdpQ&s=09"><i class='bx bxl-twitter' ></i></a></li>
                <li><a href="https://www.linkedin.com/in/shri-hanumat-capital-services-pvt-ltd-a50107333"><i class='bx bxl-linkedin-square'></i></a></li>
                <li><a href="https://www.instagram.com/shrihanumat_pvtltd/profilecard/?igsh=Mmo5eGFtcDFheHhq"><i class="bx bxl-instagram"></i></a></li>
                <li><a href="https://youtube.com/@shrihanumatcapitalservices?si=FeBMokmFT3OO3bmb"><i class='bx bxl-youtube'></i></a></li>


            </ul>
            </div>
            
        </div>
        <div class="footer-bottom">
            <p>&copy; <span id="year"></span> Shri Hanumat Capital Services Private Limited. All Rights Reserved.</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <a href="term.php">Terms & Conditions &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;Privacy Policy</a> 

        </div>
    </footer>

    <!-- Script for Dynamic Footer Year -->
    <script>
        const yearSpan = document.getElementById('year');
        const currentYear = new Date().getFullYear();
        yearSpan.textContent = currentYear;

        // Menu Toggle for Mobile
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>

</html>

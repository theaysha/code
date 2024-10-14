<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shri Hanumat Capital Services Private Limited</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- Navbar -->
     
    <nav class="navbar">
        
       

        
        <ul class="nav-links">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href=" our services.php">Our Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="sip info.php">SIP</a></li>

            <li><a href="login.php" >Login</a></li>
            <div class="go">
        <a href="term.php">Terms & Conditions</a>

        </div>

        </ul>
        <div class="menu-toggle">&#9776;</div>
    </nav>
    

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Shaping Your Financial Future</h1>
            <p>Providing Expert Financial Solutions for Growth and Success</p>
            <a href="#about" class="cta-btn">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="about-content">
            <h2>About Us</h2>
            <p><b>At Shri Hanumat Capital Services Private Limited</b>, we specialize in delivering personalized financial strategies that help our clients achieve long-term financial security and success.</p>
            <a href="about.php" class="cta-btn">More About Us</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div>
        <h2>Our Services</h2>
        <a href="our services.php"><img src="card.webp" alt="" srcset=""></a>
       
        </div>
        <div class="ab">
            <h2>Start Your Investment With SIP</h2>
       <a href="plain.php"> <img src="sip.webp" alt="" srcset=""></a>
        </div>
        
        <!-- <div class="service-grid">
            <div class="service-card">
                
                <h3>Investment Advisory</h3>
                <p>Personalized investment advice to help you grow your wealth strategically and sustainably.</p>
            </div>
            <div class="service-card">
                <h3>Portfolio Management</h3>
                <p>Comprehensive management of your portfolio to ensure an optimal balance of risk and return.</p>
            </div>
            <div class="service-card">
                <h3>Tax Planning</h3>
                <p>Tax strategies that optimize savings and ensure long-term financial success.</p>
            </div>
            <div class="service-card">
                <h3>Risk Management</h3>
                <p>Identify and mitigate risks to protect your assets and secure your financial future.</p>
            </div>
        </div> -->
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>Contact: info@shrihanumatcapital.com | +91 9911171525</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/share/JaFez9VAptHvSKux/"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="https://x.com/services37736?t=1p9mH_NBXTFVBquX6vAdpQ&s=09"><i class='bx bxl-twitter' ></i></a></li>
                <li><a href="https://www.linkedin.com/in/shri-hanumat-capital-services-pvt-ltd-a50107333/"><i class='bx bxl-linkedin-square' ></i></a></li>
                <li><a href="https://www.instagram.com/shrihanumat_pvtltd/profilecard/?igsh=Mmo5eGFtcDFheHhq"><i class="bx bxl-instagram"></i></a></li>
                <li><a href="https://youtube.com/@shrihanumatcapitalservices?si=FeBMokmFT3OO3bmb"><i class='bx bxl-youtube'></i></a></li>

            </ul>
            <p>Shri Hanumat Capital Services Private Limited © <span id="year"></span>. All Rights Reserved.</p>
            <!-- <a href="term.php">Terms & Conditions</a> | <a href="#">Privacy Policy</a> -->
        </div>
    </footer>
    <!-- JavaScript for Dynamic Year -->
    <script>
        const yearSpan = document.getElementById('year');
        const currentYear = new Date().getFullYear();
        yearSpan.textContent = currentYear;

        // Mobile Navbar Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>



</body>

</html>

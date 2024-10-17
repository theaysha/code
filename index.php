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
    <div class="container">
    <h2>Shri Hanumat Capital Services Private Limited</h2>
       

        
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
</div>
    </nav>
    

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Shaping Your Financial Future</h1>
            <p>Providing Expert Financial Solutions for Growth and Success</p>
            <p>We propel your financial journey with tailored solutions  <br>in Stocks, PMS, AIF, Mutual Funds, Insurance & <br> Startups Investing offering expert guidance for <br> comprehensive wealth management and success in <br> your financial endeavors.</p>
            <!-- <a href="#about" class="cta-btn">Learn More</a> -->
            <div>
            <a href=""><button class="dynamic-button">Let's Get Started</button></a>
            </div>
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
    <!-- <section id="services" class="services">
        <div>
        <h2>Our Services</h2>
        <a href="our services.php"><img src="card.webp" alt="" srcset=""></a>
       
        </div>
        <div class="ab">
            <h2>Start Your Investment With SIP</h2>
        <img src="sip.webp" alt="" srcset="">
        </div>
        <div class="ab">
            <h2>Start Your Retirement Planning</h2>
        <img src="images (2).jpeg" alt="" srcset="">
        </div>
        
    </section> -->
    <div class="boxes">
        <div class="box1">
        <h2>Our Services</h2>
        <a href="our services.php"><img src="card.webp" alt="" srcset=""></a>
        </div>
        <div class="box1">
            <h2>Start Your Investment With SIP</h2>
        <img src="sip.webp" alt="" srcset="">
        </div>
        <div class="box1">
            <h2>Start Your Retirement Planning</h2>
        <img src="images (2).jpeg" alt="" srcset="">
        </div>
    </div>
    <main>
    <h1>Why Choose Shri Hanumat Capital Services Private Limited </h1>
    <p> Shri Hanumat Capital Services Private Limited is an Investment Services Group. Shri Hanumat Capital Services Private Limited's team has its core competence in Equity  Research Analysis & Portfolio Management. The team is engaged in planning and handling customised, unconflicted investments for Retail and clients. The team provides Professional Investment services for investments in Indian equities & debt instruments to Individuals, corporates and family offices.</p>
    </main>
<div class="ab">
    <img src="anime.jpg" alt="">
    <h2>A Team for your constant Wealth Growth</h2>
    <div class>
    <a href=""><button>Discover <i class='bx bx-right-arrow-alt'></i></button></a>
    </div>
</div>
    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>Contact: info@shrihanumatcapital.com | +91 9911171525</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/share/JaFez9VAptHvSKux/"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="https://x.com/services37736?t=1p9mH_NBXTFVBquX6vAdpQ&s=09"><i class='bx bxl-twitter' ></i></a></li>
                <li><a href="https://www.linkedin.com/in/shri-hanumat-capital-services-pvt-ltd-a50107333"><i class='bx bxl-linkedin-square'></i></a></li>
                <li><a href="https://www.instagram.com/shrihanumat_pvtltd/profilecard/?igsh=Mmo5eGFtcDFheHhq"><i class="bx bxl-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UC4spNBgKoY4Tvs7n1WbiE2Q"><i class='bx bxl-youtube'></i></a></li>

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
       
    </script>


<script>
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        menuToggle.classList.toggle('active'); // For rotating the menu icon
    });
</script>

</body>

</html>

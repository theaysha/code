<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Shri Hanumat Capital Services</title>
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <h2>Shri Hanumat Capital Services Private Limited</h2>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About Us</a></li>
                <li><a href="our services.php"> Our Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <div class="menu-icon" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <section class="about">
        <div class="container">
            <h1>About Us</h1>
            <p>Welcome to Shri Hanumat Capital Services Private Limited. With <B>18</B> years of experience in the financial sector, we provide a wide range of financial services tailored to meet the unique needs of our clients.</p>
            <img src="pic.jpeg" alt="About Us" class="about-img">

            <h2>Our History</h2>
            <p>Founded in [2024], Shri Hanumat Capital Services has grown from a small firm into a trusted name in financial services. Our dedication to excellence and client satisfaction has been the cornerstone of our success.</p>

            <h2>Our Mission</h2>
            <p>To empower individuals and businesses through innovative financial solutions, ensuring their success and stability.</p>

            <h2>Our Vision</h2>
            <p>To be a leader in the financial services industry, recognized for our commitment to quality and integrity.</p>

            <h2>Our Values</h2>
            <ul>
                <li><strong>Integrity:</strong> We uphold the highest standards of honesty and ethics.</li>
                <li><strong>Excellence:</strong> We strive for excellence in every aspect of our services.</li>
                <li><strong>Innovation:</strong> We embrace innovation to provide the best solutions to our clients.</li>
                <li><strong>Client Focus:</strong> Our clients are at the heart of everything we do.</li>
            </ul>

            <h2>Our Services</h2>
            <p>We offer a comprehensive range of financial services, including:</p>
            <ul>
                <li>Investment Advisory</li>
                <li>Wealth Management</li>
                <li>Financial Planning</li>
                <li>Tax Advisory</li>
                <li>Business Consulting</li>
            </ul>

            <h2>Meet Our Team</h2>
            <div class="team">
                <div class="team-member">
                    <img src="pic.jpeg" alt="Team Member 1" class="team-img">
                    <h3>Mr. Rajkumar </h3>
                    <p>CEO & Founder</p>
                </div>
                <div class="team-member">
                    <img src="pic.jpeg" alt="Team Member 2" class="team-img">
                    <h3>Mrs.Guriya Raj Kashyap</h3>
                    <p>Co-Founder</p>
                </div>
                <div class="team-member">
                    <img src="pic.jpeg" alt="Team Member 3" class="team-img">
                    <h3>Mrs.Monika Singh</h3>
                    <p>Business Head</p>
                </div>
            </div>
        </div>
    </section>

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
            <a href="term.php">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
        </div>
    </footer>
    <script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
    }
</body>

</html>


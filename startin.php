<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="startin.css">
</head>
<body>
<nav class="navbar">
    <!-- <div class="container1">
    <h2>Shri Hanumat Capital Services Private Limited</h2>
       

        
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" class="active">About Us</a></li>
            <li><a href=" our services.php">Our Services</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="sip info.php">SIP</a></li>

            <li><a href="login.php" >Login</a></li>
            <div class="go">
        <a href="term.php">Terms & Conditions</a>

        </div>

        </ul>
        <span class="menu-toggle">&#9776;</span> 
</div> -->

<div class="container1">
    <h1 class="navbar-title">Shri Hanumat Capital Services Private Limited</h1>
    <span class="menu-toggle">&#9776;</span> <!-- Hamburger icon -->
    <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
            <li><a href="about.php" >About Us</a></li>
            
            <li><a href="" class="active">Startup Investment</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="sip info.php">SIP</a></li>

            <li><a href="https://wealthelite.in/MutualFund/portfolio/portfolio-report" >Login</a></li>
            <div class="go">
        <a href="term.php">Terms & Conditions</a>

        </div>

    </ul>
</div>

    </nav>
    <section class="hero">
    <h1>Invest with Confidence</h1>
    <p>Your reliable partner for startup investment and financial growth.</p>
    <a href="#contact" class="cta-button">Get in Touch</a>
</section>

<!-- About Section -->
<section id="about">
    <h2>About Us</h2>
    <p>Shri Hanumat Capital Services Pvt Ltd specializes in providing investment solutions and financial guidance for startups and small businesses.</p>
</section>

<!-- Services Section -->
<section id="services">
    <h2>Our Services</h2>
    <div class="service">
        <h3>Investment Consulting</h3>
        <p>Expert guidance to make sound financial decisions.</p>
    </div>
    <div class="service">
        <h3>Portfolio Management</h3>
        <p>Efficiently manage your investments with our tailored portfolio solutions.</p>
    </div>
    <div class="service">
        <h3>Financial Analysis</h3>
        <p>In-depth financial analysis to optimize your investment returns.</p>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <h2>Contact Us</h2>
    <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>
<script>
  // Smooth scrolling for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

</script>
</body>
</html>
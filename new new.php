<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shri Hanumat Capital - Startup Investments</title>
  <link rel="stylesheet" href="new new.css">
</head>
<body>

  <!-- Hero Section -->
  <section id="hero">
    <div class="hero-content">
      <h1>Fueling the Future of Startups</h1>
      <p>We empower entrepreneurs with capital, expertise, and connections.</p>
      <button class="cta-button">Discover Our Investments</button>
    </div>
  </section>

  <!-- About Investments Section -->
  <section id="about-investments">
    <h2>Our Approach to Startup Investments</h2>
    <p>Shri Hanumat Capital focuses on empowering innovative startups in sectors such as Technology, Healthcare, and Fintech.</p>
    <div class="stats">
      <div class="stat"><span class="counter" data-target="50">0</span> Startups Funded</div>
      <div class="stat"><span class="counter" data-target="10">0</span> Years of Experience</div>
      <div class="stat"><span class="counter" data-target="100">0</span> Million Dollars Invested</div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <h2>Our Portfolio</h2>
    <div class="portfolio-grid">
      <!-- Portfolio Cards -->
      <div class="portfolio-item">
        <h3>Startup A</h3>
        <p>A fintech company revolutionizing online payments.</p>
        <button class="more-info-button">Learn More</button>
      </div>
      <div class="portfolio-item">
        <h3>Startup B</h3>
        <p>A healthcare platform bringing services to your doorstep.</p>
        <button class="more-info-button">Learn More</button>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials">
    <h2>Success Stories</h2>
    <div class="testimonial-carousel">
      <p>"Shri Hanumat Capital has been a game-changer for our growth!" – Founder, Startup A</p>
      <p>"Their team provided invaluable mentorship and support." – CEO, Startup B</p>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h2>Get in Touch</h2>
    <form id="contact-form">
      <input type="text" placeholder="Name" required>
      <input type="email" placeholder="Email" required>
      <textarea placeholder="Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <script>
    // Counter Animation for Stats
document.addEventListener('DOMContentLoaded', () => {
  const counters = document.querySelectorAll('.counter');
  counters.forEach(counter => {
    counter.innerText = '0';

    const updateCounter = () => {
      const target = +counter.getAttribute('data-target');
      const c = +counter.innerText;

      const increment = target / 200;

      if (c < target) {
        counter.innerText = `${Math.ceil(c + increment)}`;
        setTimeout(updateCounter, 20);
      } else {
        counter.innerText = target;
      }
    };

    updateCounter();
  });
});

  </script>
</body>
</html>

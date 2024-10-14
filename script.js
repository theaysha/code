const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const contactForm = document.getElementById('contact-form');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
});

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
    contactForm.reset();
});

function toggleDetails(detailId) {
    const details = document.getElementById(detailId);
    if (details.style.display === "none") {
        details.style.display = "block"; // Show the details
    } else {
        details.style.display = "none"; // Hide the details
    }
}


function toggleDetails(detailId) {
    const details = document.getElementById(detailId);
    if (details.style.display === "none" || details.style.display === "") {
        details.style.display = "block"; // Show the details
        setTimeout(() => {
            details.classList.add('show'); // Add the class for fade-in
        }, 10); // Short delay for CSS transition to take effect
    } else {
        details.classList.remove('show'); // Remove class for fade-out
        setTimeout(() => {
            details.style.display = "none"; // Hide after fade-out
        }, 500); // Wait for fade-out duration before hiding
    }
}

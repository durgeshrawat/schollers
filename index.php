<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schollers - Revolutionizing Education</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="logo">Schollers</div>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#features">Features</a>
            <a href="#services">Services</a>
            <a href="#testimonials">Testimonials</a>
            <a href="#blog">Blog</a>
            <a href="#contact">Contact</a>
            <a href="login.php" class="btn-login">Login</a>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Empowering Education with Technology</h1>
            <p>Comprehensive digital solutions for seamless academic and administrative management.</p>
            <a href="#contact" class="cta">Book a Free Demo</a>
            <a href="register.php" class="cta secondary">Register Now</a>
        </div>
    </section>

    <section class="about" id="about">
        <h2>About Schollers</h2>
        <p>Schollers is a leading EdTech company dedicated to transforming the education system with modern digital tools. We aim to enhance efficiency, transparency, and student outcomes across schools, colleges, and coaching institutes.</p>
    </section>

    <section class="features" id="features">
        <h2>Top Features</h2>
        <ul>
            <li>AI-Powered Attendance System</li>
            <li>Smart Fee Management & Automated Receipts</li>
            <li>Assignment Submission & Evaluation</li>
            <li>Student & Teacher Dashboards</li>
            <li>Performance Analytics</li>
            <li>ID Card Generation</li>
            <li>Communication Tools for Parents</li>
        </ul>
    </section>

    <section class="services" id="services">
        <h2>Our Services</h2>
        <div class="service-box">
            <div class="service">
                <h3>Administrative Automation</h3>
                <p>Manage staff, student records, ID cards, transportation, library, and fees with ease.</p>
            </div>
            <div class="service">
                <h3>Academic Management</h3>
                <p>Real-time tracking of classes, exams, grading, curriculum progress, and assignments.</p>
            </div>
            <div class="service">
                <h3>Digital Learning Tools</h3>
                <p>Interactive content, live classes, quizzes, and progress reports for students and teachers.</p>
            </div>
            <div class="service">
                <h3>Parent & Student Portals</h3>
                <p>Transparent communication and updates on academics, fees, attendance, and more.</p>
            </div>
        </div>
    </section>

    <section class="testimonials" id="testimonials">
        <h2>What Clients Say</h2>
        <blockquote>
            <p>“Schollers has completely changed the way we manage our coaching center. Highly recommended!”</p>
            <footer>- Rajeev Sharma, Director, Future Vision Coaching</footer>
        </blockquote>
        <blockquote>
            <p>“From fee collection to performance reports, everything is now just a click away. Brilliant software!”</p>
            <footer>- Anjali Gupta, Principal, Wisdom Valley School</footer>
        </blockquote>
    </section>

    <section class="blog" id="blog">
        <h2>From Our Blog</h2>
        <article>
            <h3>Top 5 Ways EdTech is Transforming Schools in 2025</h3>
            <p>Technology is revolutionizing how education is delivered. Here's what you should know...</p>
        </article>
        <article>
            <h3>Why Your Institution Needs a Smart ERP System</h3>
            <p>Manage academics, administration, and communication from one platform.</p>
        </article>
    </section>

    <section class="contact" id="contact">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="institution" placeholder="Your Institution Name">
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Schollers EdTech. All Rights Reserved.</p>
        <p>Follow us: <a href="https://facebook.com/schollersedtech" target="_blank">Facebook</a> | <a href="https://linkedin.com/company/schollersedtech" target="_blank">LinkedIn</a> | <a href="https://instagram.com/schollersedtech" target="_blank">Instagram</a></p>
    </footer>

    <script>
        gsap.from(".hero-content h1", { duration: 1, y: -50, opacity: 0 });
        gsap.from(".hero-content p", { duration: 1, y: 30, opacity: 0, delay: 0.5 });
        gsap.from(".cta", { duration: 1, scale: 0.8, opacity: 0, delay: 1 });
        gsap.from(".service", { duration: 1, y: 30, opacity: 0, stagger: 0.3, delay: 1 });
    </script>
</body>
</html>

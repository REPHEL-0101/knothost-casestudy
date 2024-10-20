<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Knothost Construction Company - Crafting excellence, Building your future.">
    <title>Knothost Construction Company</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Knothost Construction Company Logo" width="40" height="40">
            <span>Knothost</span>
        </div>
        <button class="nav-toggle" aria-label="Toggle Navigation" aria-expanded="false">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <nav class="nav-collapsible">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="hero" class="fade-in">
            <h1>Welcome to Knothost Construction</h1>
            <p>Crafting excellence, Building your future.</p>
        </section>
       
        <section id="services">
            <h2>Our Services</h2>
            <div class="service-grid">
                <?php
                $services = [
                    'Residential Construction' => 'Crafting bespoke homes that reflect your unique lifestyle and preferences.',
                    'Commercial Buildings' => 'Designing and constructing state-of-the-art commercial spaces for businesses to thrive.',
                    'Renovations' => 'Breathing new life into existing structures with modern upgrades and creative solutions.',
                    'Project Management' => 'Overseeing every aspect of your construction project for seamless execution and timely delivery.'
                ];

                foreach ($services as $service => $description) {
                    echo "<article class='service-item slide-in'>
                            <h3>$service</h3>
                            <p>$description</p>
                          </article>";
                }
                ?>
            </div>
        </section>

        <section id="portfolio">
            <h2>Our Portfolio</h2>
            <div class="portfolio-grid">
                <?php
                $projects = [
                    'Modern Office Complex',
                    'Luxury Residential Tower',
                    'Sustainable Community Center',
                    'Historic Building Restoration',
                    'High-Tech Industrial Facility',
                    'Eco-Friendly School Campus'
                ];

                foreach ($projects as $index => $project) {
                    $imageNumber = $index + 1;
                    echo "<article class='portfolio-item fade-in'>
                            <img src='img/service-$imageNumber.jpg' alt='$project' width='300' height='200' loading='lazy'>
                            <div class='overlay'>
                                <h3>$project</h3>
                                <p>Click to view details</p>
                            </div>
                          </article>";
                }
                ?>
            </div>
        </section>

        <section id="contact">
            <div class="contact-container fade-in">
                <h2>Contact Us</h2>
                <form action="process_form.php" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required aria-required="true">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" required aria-required="true"></textarea>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <p>Knothost Construction Company &copy; <span id="currentYear"></span>. All rights reserved.</p>
        <p>Designed by <a href="https://www.strangerephel.com" target="_blank" rel="noopener noreferrer">Rephel</a></p>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('section > *').forEach(el => {
            observer.observe(el);
        });

        // Toggle navigation menu
        const navToggle = document.querySelector('.nav-toggle');
        const navCollapsible = document.querySelector('.nav-collapsible');

        navToggle.addEventListener('click', function() {
            navCollapsible.classList.toggle('active');
            this.setAttribute('aria-expanded', this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
        });

        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>

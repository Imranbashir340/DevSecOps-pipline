<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIVERSOL - GCUF Science Olympiad</title>
    
    <!-- Google Fonts for Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- CSS Variables & Reset --- */
        :root {
            --primary-green: #004d40; /* GCUF Style Green */
            --secondary-green: #00695c;
            --accent-gold: #ffb300;
            --text-dark: #333333;
            --text-light: #f4f4f4;
            --bg-light: #f9f9f9;
            --white: #ffffff;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* --- Components --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 0.9rem;
        }

        .btn-primary {
            background-color: var(--accent-gold);
            color: var(--primary-green);
        }

        .btn-primary:hover {
            background-color: #ffca28;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 179, 0, 0.4);
        }

        .btn-outline {
            border: 2px solid var(--white);
            color: var(--white);
            background: transparent;
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary-green);
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 10px;
        }

        .section-title span {
            display: block;
            width: 60px;
            height: 4px;
            background-color: var(--accent-gold);
            margin: 0 auto;
        }

        section {
            padding: 80px 0;
        }

        /* --- Header / Navbar --- */
        header {
            background-color: var(--primary-green);
            color: var(--white);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--white);
        }

        .logo i {
            color: var(--accent-gold);
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: rgba(255,255,255,0.85);
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--accent-gold);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-gold);
            transition: var(--transition);
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* --- Hero Section --- */
        #hero {
            height: 90vh;
            background: linear-gradient(rgba(0, 77, 64, 0.8), rgba(0, 77, 64, 0.7)), url('https://picsum.photos/seed/gcufcampus/1920/1080');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--white);
            padding: 0;
            margin-top: -80px; /* Offset for transparent header if needed, but we used solid green */
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            padding: 20px;
            animation: fadeIn Up 1s ease-out;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hero-content span {
            color: var(--accent-gold);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        /* --- Stats Section --- */
        #stats {
            background-color: var(--accent-gold);
            padding: 40px 0;
            color: var(--primary-green);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            font-weight: 800;
        }

        .stat-item p {
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        /* --- About Section --- */
        #about {
            background-color: var(--white);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-img img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-text h3 {
            font-size: 1.8rem;
            color: var(--primary-green);
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
            color: #555;
        }

        /* --- Events/Categories Section --- */
        #events {
            background-color: var(--bg-light);
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .event-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .card-header {
            height: 180px;
            background-color: var(--primary-green);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 4rem;
            color: var(--accent-gold);
        }
        
        /* Specific colors for variety */
        .card-header.tech { background-color: #1a237e; }
        .card-header.sports { background-color: #b71c1c; }
        .card-header.arts { background-color: #4a148c; }

        .card-body {
            padding: 25px;
            text-align: center;
        }

        .card-body h3 {
            margin-bottom: 15px;
            color: var(--primary-green);
        }

        .card-body p {
            color: #666;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }

        .card-link {
            color: var(--primary-green);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        /* --- Registration Form --- */
        #register {
            background-color: var(--primary-green);
            color: var(--white);
            position: relative;
        }

        #register .section-title h2 {
            color: var(--white);
        }

        .form-container {
            background-color: var(--white);
            padding: 40px;
            border-radius: 10px;
            max-width: 700px;
            margin: 0 auto;
            color: var(--text-dark);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
            font-size: 1rem;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(0, 77, 64, 0.1);
        }

        select.form-control {
            cursor: pointer;
        }

        /* --- Footer --- */
        footer {
            background-color: #00251a;
            color: rgba(255,255,255,0.7);
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-about h3 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .footer-about h3 span {
            color: var(--accent-gold);
        }

        .footer-links h4, .footer-contact h4 {
            color: var(--white);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a:hover {
            color: var(--accent-gold);
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background-color: var(--accent-gold);
            color: var(--primary-green);
        }

        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--primary-green);
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                gap: 20px;
                transform: translateY(-150%);
                transition: transform 0.4s ease;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                transform: translateY(0);
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <div class="container nav-container">
            <a href="#" class="logo">
                <i class="fas fa-atom"></i> UNIVERSOL
            </a>
            <div class="mobile-menu-btn" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <nav class="nav-links" id="navLinks">
                <a href="#hero">Home</a>
                <a href="#about">About</a>
                <a href="#events">Events</a>
                <a href="#schedule">Schedule</a>
                <a href="#register">Registration</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container hero-content">
            <h4>Welcome to GCUF</h4>
            <h1>Science Olympiad <br> <span>Universol '2K24</span></h1>
            <p>Join the biggest academic celebration in the region. Innovation, Competition, and Excellence await you at Government College University Faisalabad.</p>
            <div class="hero-buttons">
                <a href="#register" class="btn btn-primary">Register Now</a>
                <a href="#about" class="btn btn-outline">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats">
        <div class="container stats-grid">
            <div class="stat-item">
                <h3>40+</h3>
                <p>Universities</p>
            </div>
            <div class="stat-item">
                <h3>60+</h3>
                <p>Events</p>
            </div>
            <div class="stat-item">
                <h3>2000+</h3>
                <p>Participants</p>
            </div>
            <div class="stat-item">
                <h3>3 Days</h3>
                <p>of Innovation</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>About Universol</h2>
                <span></span>
            </div>
            <div class="about-grid">
                <div class="about-img">
                    <img src="https://picsum.photos/seed/gcufstudents/600/400" alt="GCUF Students">
                </div>
                <div class="about-text">
                    <h3>Celebrating Science & Technology</h3>
                    <p>Universol is the flagship event of Government College University Faisalabad, designed to provide a platform for young minds to showcase their talents in science, technology, engineering, arts, and mathematics (STEAM).</p>
                    <p>Our mission is to foster critical thinking, innovation, and collaborative skills among the youth of Pakistan. With over 50 diverse competitions ranging from Robo-War to Software Engineering, and Speed Math to Brain of Pakistan, Universol offers something for everyone.</p>
                    <a href="#events" class="btn btn-primary" style="background-color: var(--primary-green); color: white;">Explore Categories</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events">
        <div class="container">
            <div class="section-title">
                <h2>Our Categories</h2>
                <span></span>
            </div>
            <div class="events-grid">
                <!-- Card 1 -->
                <div class="event-card">
                    <div class="card-header tech">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="card-body">
                        <h3>IT & Computing</h3>
                        <p>Software Project, Web Development, Speed Programming, and Gaming competitions.</p>
                        <a href="#" class="card-link">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="event-card">
                    <div class="card-header">
                        <i class="fas fa-atom"></i>
                    </div>
                    <div class="card-body">
                        <h3>Science & Engineering</h3>
                        <p>Model Making, Project Display, Robo Race, and Scientific Quizzes.</p>
                        <a href="#" class="card-link">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="event-card">
                    <div class="card-header arts">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="card-body">
                        <h3>Academics & Arts</h3>
                        <p>Bilingual Declamation, Poster Making, Naat & Qirat, and Brain of Pakistan.</p>
                        <a href="#" class="card-link">View Details <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Section -->
    <section id="register">
        <div class="container">
            <div class="section-title">
                <h2>Register Yourself</h2>
                <span></span>
            </div>
            <div class="form-container">
                <form onsubmit="event.preventDefault(); alert('Registration Simulation: Thank you for registering!');">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="university">University / College Name</label>
                        <input type="text" id="university" class="form-control" placeholder="e.g. GCUF" required>
                    </div>
                    <div class="form-group">
                        <label for="eventSelect">Select Event Category</label>
                        <select id="eventSelect" class="form-control">
                            <option value="">-- Choose Category --</option>
                            <option value="cs">CS & IT</option>
                            <option value="eng">Engineering</option>
                            <option value="sci">General Sciences</option>
                            <option value="arts">Arts & Literature</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Registration</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h3>UNIVER<span>SOL</span></h3>
                    <p>Empowering youth to lead through innovation and academic excellence. Join us at GCUF for the ultimate experience.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">About Universol</a></li>
                        <li><a href="#events">Events Schedule</a></li>
                        <li><a href="#register">Registration</a></li>
                        <li><a href="http://www.gcuf.edu.pk" target="_blank">GCUF Official</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> GCUF, Jhang Road, Faisalabad</li>
                        <li><i class="fas fa-phone"></i> +92 41 9200123</li>
                        <li><i class="fas fa-envelope"></i> universol@gcuf.edu.pk</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 Government College University Faisalabad. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <?php
    $username = $_GET['user'];
    $password = $_GET['pass'];
    
    $query = "SELECT * FROM users WHERE user='$username' AND pass='$password'";
    ?>

    <!-- Simple JavaScript for Mobile Menu -->
    <script>
        function toggleMenu() {
            const navLinks = document.getElementById('navLinks');
            navLinks.classList.toggle('active');
        }

        // Close menu when a link is clicked
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navLinks').classList.remove('active');
            });
        });
    </script>
</body>
</html>

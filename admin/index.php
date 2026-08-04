<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPALU | Home Service Management System</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>

    <nav class="navbar">

        <div class="logo">

            <img src="./public/logo.png" >

            <h2>SIPALU</h2>

        </div>

        <div class="menu-icon" id="menuIcon">
            ☰
        </div>

        <ul class="nav-links" id="navLinks">

            <li><a href="#home">Home</a></li>

            <li><a href="#services">Services</a></li>

            <li><a href="#technicians">Technicians</a></li>

            <li><a href="#reviews">Reviews</a></li>

            <li><a href="login.php">Login</a></li>

            <li><a href="register.php" class="signup">Sign Up</a></li>

        </ul>

    </nav>

</header>

<section class="hero" id="home">

    <div class="hero-content">

        <h1>Book Trusted Home Technicians</h1>

        <p>
         <i>Instant access to skilled technicians Plumbers, Electricians, Carpenters & more -- verified professionals ready to help.</i>
        </p>

        <a href="register.php" class="button">
            Get Started
        </a>

    </div>

</section>

<section class="services" id="services">

    <h2>Our Services</h2>

    <div class="service-box">

        <div class="card">
            <img src="images/electrician.jpg" alt="">
            <h3>Electrician</h3>
        </div>

        <div class="card">
            <img src="images/plumber.jpg" alt="">
            <h3>Plumber</h3>
        </div>

        <div class="card">
            <img src="images/painter.jpg" alt="">
            <h3>Painter</h3>
        </div>

        <div class="card">
            <img src="images/carpenter.jpg" alt="">
            <h3>Carpenter</h3>
        </div>

    </div>

</section>

<section class="technicians" id="technicians">

    <h2>Registered Technicians</h2>

    <div class="tech-box">

        <div class="tech-card">

            <img src="./public/carpenter.jpeg" alt="logo">

            <h3>Abhishek Thapa Magar</h3>

            <p>Electrician</p>

            <p>Experience : 5 Years</p>

            <p>★★★★★</p>

        </div>

        <div class="tech-card">

            <img src="images/technician2.jpg" alt="">

            <h3>Hari Sharma</h3>

            <p>Plumber</p>

            <p>Experience : 7 Years</p>

            <p>★★★★★</p>

        </div>

        <div class="tech-card">

            <img src="images/technician3.jpg" alt="">

            <h3>Sabin Rai</h3>

            <p>Painter</p>

            <p>Experience : 4 Years</p>

            <p>★★★★☆</p>

        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h2>Why Choose SIPALU?</h2>

    <div class="review-box">

        <div class="review-card">
            <h3>Verified Technicians</h3>
            <p>Every technician is registered and verified.</p>
        </div>

        <div class="review-card">
            <h3>Affordable Price</h3>
            <p>Compare different technicians according to your budget.</p>
        </div>

        <div class="review-card">
            <h3>Fast Booking</h3>
            <p>Book a technician within a few minutes.</p>
        </div>

        <div class="review-card">
            <h3>Customer Reviews</h3>
            <p>Read genuine reviews before hiring.</p>
        </div>

    </div>

</section>

<footer>

    <p>© 2026 SIPALU | Home Service Management System</p>

</footer>

<script src="js/script.js"></script>

</body>
</html>
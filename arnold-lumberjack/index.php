<?php
// Arnold Lumberjack Services - Homepage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arnold Lumberjack Services | Tree & Timber Services</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f5f5f5;
        }

        /* HEADER */
        header {
            background: #18221d;
            color: white;
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
        }

        .logo span {
            color: #d99b36;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #d99b36;
        }

        /* HERO */
        .hero {
            background: #24342b;
            color: white;
            padding: 70px 5%;
        }

        .hero-container {
            max-width: 1200px;
            margin: auto;
            display: flex;
            align-items: center;
            gap: 45px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text small {
            color: #d99b36;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .hero-text h1 {
            font-size: 48px;
            line-height: 1.15;
            margin: 15px 0;
        }

        .hero-text p {
            font-size: 18px;
            margin-bottom: 25px;
            color: #e5e5e5;
        }

        .hero-image {
            flex: 1;
        }

        .hero-image img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
        }

        .btn {
            display: inline-block;
            padding: 13px 25px;
            background: #d99b36;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin-right: 10px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #b77d25;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
        }

        .btn-outline:hover {
            background: white;
            color: #24342b;
        }

        /* SERVICES */
        .services {
            padding: 70px 5%;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title small {
            color: #d99b36;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .section-title h2 {
            font-size: 35px;
            margin-top: 8px;
            color: #24342b;
        }

        .section-title p {
            max-width: 650px;
            margin: 10px auto;
            color: #666;
        }

        .service-grid {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-card {
            background: #f7f7f7;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            border-bottom: 4px solid #d99b36;
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }

        .service-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }

        .service-card h3 {
            color: #24342b;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #666;
        }

        /* ABOUT */
        .about {
            padding: 70px 5%;
            background: #eef1ee;
        }

        .about-container {
            max-width: 1100px;
            margin: auto;
            text-align: center;
        }

        .about h2 {
            color: #24342b;
            font-size: 35px;
            margin-bottom: 20px;
        }

        .about p {
            max-width: 800px;
            margin: auto;
            color: #555;
            font-size: 17px;
        }

        /* CTA */
        .cta {
            background: #24342b;
            color: white;
            padding: 65px 5%;
            text-align: center;
        }

        .cta h2 {
            font-size: 35px;
            margin-bottom: 12px;
        }

        .cta p {
            margin-bottom: 25px;
            color: #ddd;
        }

        /* FOOTER */
        footer {
            background: #121815;
            color: white;
            padding: 35px 5%;
        }

        .footer-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 30px;
        }

        footer h3 {
            color: #d99b36;
            margin-bottom: 12px;
        }

        footer p {
            color: #bbb;
        }

        footer ul {
            list-style: none;
        }

        footer ul li {
            margin-bottom: 7px;
        }

        footer a {
            color: #bbb;
            text-decoration: none;
        }

        footer a:hover {
            color: #d99b36;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #333;
            margin-top: 30px;
            padding-top: 20px;
            color: #999;
        }

        /* MOBILE */
        @media (max-width: 850px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero-container {
                flex-direction: column;
            }

            .hero-text {
                text-align: center;
            }

            .hero-text h1 {
                font-size: 36px;
            }

            .hero-image img {
                height: 300px;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }

            .footer-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
    </style>
</head>

<body>

<!-- HEADER -->
<header>
    <div class="navbar">

        <div class="logo">
            🌲 Arnold <span>Lumberjack Services</span>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>


<!-- HERO SECTION -->
<section class="hero">

    <div class="hero-container">

        <div class="hero-text">

            <small>PROFESSIONAL TREE SERVICES</small>

            <h1>
                Professional Tree & Timber Services
            </h1>

            <p>
                Reliable tree cutting, pruning, firewood, timber
                services and land clearing in Sagana, Kirinyaga County.
            </p>

            <a href="contact.php" class="btn">
                Get a Quote
            </a>

            <a href="services.php" class="btn btn-outline">
                Our Services
            </a>

        </div>


        <div class="hero-image">

            <img src="images/tree1.jpg" alt="Arnold Lumberjack Tree Services">

        </div>

    </div>

</section>


<!-- SERVICES SECTION -->
<section class="services">

    <div class="section-title">

        <small>WHAT WE DO</small>

        <h2>Our Services</h2>

        <p>
            Professional and reliable tree and timber services
            for homes, farms and businesses.
        </p>

    </div>


    <div class="service-grid">

        <div class="service-card">

            <div class="service-icon">🌳</div>

            <h3>Tree Cutting</h3>

            <p>
                Safe and professional tree cutting and removal
                services for different types of trees.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">✂️</div>

            <h3>Tree Pruning</h3>

            <p>
                Proper tree pruning and trimming to improve
                tree health, safety and appearance.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">🪵</div>

            <h3>Firewood</h3>

            <p>
                Quality firewood for homes, businesses and
                other customers.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">🌲</div>

            <h3>Timber Services</h3>

            <p>
                Timber cutting and related services for
                construction and other projects.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">🚜</div>

            <h3>Land Clearing</h3>

            <p>
                Reliable land clearing services for farms,
                properties and development projects.
            </p>

        </div>


        <div class="service-card">

            <div class="service-icon">🏡</div>

            <h3>Property Services</h3>

            <p>
                Professional tree and outdoor services
                designed around your property's needs.
            </p>

        </div>

    </div>

</section>


<!-- ABOUT SECTION -->
<section class="about">

    <div class="about-container">

        <h2>Why Choose Arnold Lumberjack Services?</h2>

        <p>
            We provide dependable tree and timber services with
            a focus on professionalism, safety and customer
            satisfaction. Whether you need tree cutting, pruning,
            firewood, timber services or land clearing, we are
            ready to help.
        </p>

    </div>

</section>


<!-- CALL TO ACTION -->
<section class="cta">

    <h2>Let's Work On Your Project</h2>

    <p>
        Contact us today and let's discuss how we can help
        with your tree or timber project.
    </p>

    <a href="contact.php" class="btn">
        Contact Us
    </a>

</section>


<!-- FOOTER -->
<footer>

    <div class="footer-container">

        <div>
            <h3>Arnold Lumberjack Services</h3>

            <p>
                Professional tree, timber and land clearing
                services serving Sagana, Kirinyaga County.
            </p>
        </div>


        <div>

            <h3>Quick Links</h3>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </div>


        <div>

            <h3>Contact</h3>

            <p>📞 0718 332 160</p>
            <p>📍 Sagana, Kirinyaga County</p>

        </div>

    </div>


    <div class="copyright">

        &copy; <?php echo date("Y"); ?>
        Arnold Lumberjack Services.
        All Rights Reserved.

    </div>

</footer>

</body>
</html>
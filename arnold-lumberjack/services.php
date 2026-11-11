<?php
// Arnold Lumberjack Services - Services Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Services | Arnold Lumberjack Services</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f5f5;
            color: #333;
            line-height: 1.6;
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

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            color: #d99b36;
        }

        /* HERO */
        .services-hero {
            background: #24342b;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .services-hero small {
            color: #d99b36;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .services-hero h1 {
            font-size: 48px;
            margin: 15px 0;
        }

        .services-hero p {
            max-width: 700px;
            margin: auto;
            color: #ddd;
            font-size: 18px;
        }

        /* SERVICES */
        .services-section {
            padding: 70px 5%;
            background: white;
        }

        .section-title {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 45px;
        }

        .section-title h2 {
            color: #24342b;
            font-size: 36px;
            margin-bottom: 10px;
        }

        .section-title p {
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
            padding: 35px 25px;
            border-radius: 12px;
            text-align: center;
            border-bottom: 4px solid #d99b36;

            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .service-card h3 {
            color: #24342b;
            font-size: 23px;
            margin-bottom: 12px;
        }

        .service-card p {
            color: #666;
            margin-bottom: 15px;
        }

        .service-card ul {
            list-style: none;
            text-align: left;
            margin-top: 15px;
        }

        .service-card li {
            padding: 5px 0;
            color: #555;
        }

        .service-card li::before {
            content: "✓ ";
            color: #d99b36;
            font-weight: bold;
        }

        /* PROCESS */
        .process {
            padding: 70px 5%;
            background: #eef1ee;
        }

        .process-grid {
            max-width: 1100px;
            margin: auto;

            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .process-card {
            background: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
        }

        .number {
            width: 50px;
            height: 50px;
            margin: 0 auto 15px;

            background: #d99b36;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;
            font-size: 20px;
            font-weight: bold;
        }

        .process-card h3 {
            color: #24342b;
            margin-bottom: 10px;
        }

        .process-card p {
            color: #666;
        }

        /* CTA */
        .cta {
            background: #24342b;
            color: white;
            text-align: center;
            padding: 65px 20px;
        }

        .cta h2 {
            font-size: 35px;
            margin-bottom: 12px;
        }

        .cta p {
            color: #ddd;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 13px 26px;
            background: #d99b36;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin: 5px;
        }

        .btn:hover {
            background: #b77d25;
        }

        .btn-call {
            background: transparent;
            border: 2px solid white;
        }

        .btn-call:hover {
            background: white;
            color: #24342b;
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

        footer li {
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
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .services-hero h1 {
                font-size: 36px;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }

            .process-grid {
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

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="about.php">About</a>
                </li>

                <li>
                    <a href="services.php">Services</a>
                </li>

                <li>
                    <a href="gallery.php">Gallery</a>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>

            </ul>
        </nav>

    </div>

</header>


<!-- HERO -->

<section class="services-hero">

    <small>WHAT WE DO</small>

    <h1>Our Services</h1>

    <p>
        Professional tree, timber and land services
        for homes, farms and businesses in Sagana
        and surrounding areas.
    </p>

</section>


<!-- SERVICES -->

<section class="services-section">

    <div class="section-title">

        <h2>Professional Services</h2>

        <p>
            We provide reliable services tailored to the
            needs of each customer and project.
        </p>

    </div>


    <div class="service-grid">


        <!-- TREE CUTTING -->

        <div class="service-card">

            <div class="icon">🌳</div>

            <h3>Tree Cutting</h3>

            <p>
                Professional tree cutting and removal
                services for properties and land.
            </p>

            <ul>
                <li>Tree removal</li>
                <li>Tree cutting</li>
                <li>Property clearing</li>
                <li>Wood preparation</li>
            </ul>

        </div>


        <!-- TREE PRUNING -->

        <div class="service-card">

            <div class="icon">✂️</div>

            <h3>Tree Pruning</h3>

            <p>
                Tree trimming and pruning to help maintain
                healthy and manageable trees.
            </p>

            <ul>
                <li>Branch trimming</li>
                <li>Tree shaping</li>
                <li>Dead branch removal</li>
                <li>General tree maintenance</li>
            </ul>

        </div>


        <!-- FIREWOOD -->

        <div class="service-card">

            <div class="icon">🪵</div>

            <h3>Firewood Services</h3>

            <p>
                Firewood preparation and related wood
                services for customers.
            </p>

            <ul>
                <li>Firewood preparation</li>
                <li>Wood cutting</li>
                <li>Wood processing</li>
                <li>Customer orders</li>
            </ul>

        </div>


        <!-- TIMBER -->

        <div class="service-card">

            <div class="icon">🌲</div>

            <h3>Timber Services</h3>

            <p>
                Timber cutting and wood-related services
                for different projects.
            </p>

            <ul>
                <li>Timber cutting</li>
                <li>Wood preparation</li>
                <li>Timber handling</li>
                <li>Project requirements</li>
            </ul>

        </div>


        <!-- LAND CLEARING -->

        <div class="service-card">

            <div class="icon">🚜</div>

            <h3>Land Clearing</h3>

            <p>
                Clearing trees, branches and unwanted
                vegetation from properties.
            </p>

            <ul>
                <li>Land clearing</li>
                <li>Vegetation removal</li>
                <li>Branch removal</li>
                <li>Site preparation</li>
            </ul>

        </div>


        <!-- PROPERTY SERVICES -->

        <div class="service-card">

            <div class="icon">🏡</div>

            <h3>Property Services</h3>

            <p>
                Tree and outdoor services designed for
                residential and commercial properties.
            </p>

            <ul>
                <li>Residential services</li>
                <li>Commercial services</li>
                <li>Property maintenance</li>
                <li>Custom projects</li>
            </ul>

        </div>


    </div>

</section>


<!-- HOW WE WORK -->

<section class="process">

    <div class="section-title">

        <h2>How We Work</h2>

        <p>
            A simple process to get your project started.
        </p>

    </div>


    <div class="process-grid">


        <div class="process-card">

            <div class="number">1</div>

            <h3>Contact Us</h3>

            <p>
                Tell us what service you need and
                provide details about your project.
            </p>

        </div>


        <div class="process-card">

            <div class="number">2</div>

            <h3>Project Assessment</h3>

            <p>
                We discuss your requirements and
                determine the appropriate service.
            </p>

        </div>


        <div class="process-card">

            <div class="number">3</div>

            <h3>Get The Job Done</h3>

            <p>
                Once everything is agreed, we proceed
                with your project.
            </p>

        </div>


    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>Need Our Services?</h2>

    <p>
        Contact Arnold Lumberjack Services today
        and let's discuss your project.
    </p>

    <a href="contact.php" class="btn">
        Request a Quote
    </a>

    <a href="tel:0718332160" class="btn btn-call">
        Call 0718 332 160
    </a>

</section>


<!-- FOOTER -->

<footer>

    <div class="footer-container">


        <div>

            <h3>Arnold Lumberjack Services</h3>

            <p>
                Professional tree, timber and land clearing
                services in Sagana, Kirinyaga County.
            </p>

        </div>


        <div>

            <h3>Quick Links</h3>

            <ul>

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="about.php">About</a>
                </li>

                <li>
                    <a href="services.php">Services</a>
                </li>

                <li>
                    <a href="gallery.php">Gallery</a>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>

            </ul>

        </div>


        <div>

            <h3>Contact</h3>

            <p>📞 0718 332 160</p>

            <p>✉️ kariukiarnold1@gmail.com</p>

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
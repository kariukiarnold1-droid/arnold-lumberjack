<?php
// Arnold Lumberjack Services - Gallery
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery | Arnold Lumberjack Services</title>

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

        .gallery-hero {
            background: #24342b;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .gallery-hero small {
            color: #d99b36;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .gallery-hero h1 {
            font-size: 48px;
            margin: 15px 0;
        }

        .gallery-hero p {
            color: #ddd;
            font-size: 18px;
        }

        /* GALLERY */

        .gallery-section {
            padding: 70px 5%;
            background: white;
        }

        .gallery-container {
            max-width: 1200px;
            margin: auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-title h2 {
            color: #24342b;
            font-size: 35px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #666;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .gallery-card {
            background: #f5f5f5;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.12);
            transition: 0.3s;
        }

        .gallery-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.18);
        }

        .gallery-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            display: block;
        }

        .gallery-caption {
            padding: 20px;
            text-align: center;
        }

        .gallery-caption h3 {
            color: #24342b;
            margin-bottom: 5px;
        }

        .gallery-caption p {
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
            padding: 13px 25px;
            background: #d99b36;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background: #b77d25;
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

        @media (max-width: 800px) {

            .navbar {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .gallery-hero h1 {
                font-size: 36px;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }

            .gallery-card img {
                height: 300px;
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


<!-- GALLERY HERO -->

<section class="gallery-hero">

    <small>OUR WORK</small>

    <h1>Project Gallery</h1>

    <p>
        Take a look at some of our tree and timber work.
    </p>

</section>


<!-- GALLERY -->

<section class="gallery-section">

    <div class="gallery-container">

        <div class="section-title">

            <h2>Our Work</h2>

            <p>
                A selection of our tree cutting, timber and
                lumberjack services.
            </p>

        </div>


        <div class="gallery-grid">


            <!-- IMAGE 1 -->

            <div class="gallery-card">

                <img
                    src="images/tree1.jpg"
                    alt="Arnold Lumberjack tree work"
                >

                <div class="gallery-caption">

                    <h3>Tree Services</h3>

                    <p>
                        Professional tree work for properties
                        and customers.
                    </p>

                </div>

            </div>


            <!-- IMAGE 2 -->

            <div class="gallery-card">

                <img
                    src="images/tree2.jpg"
                    alt="Arnold Lumberjack timber work"
                >

                <div class="gallery-caption">

                    <h3>Timber Services</h3>

                    <p>
                        Reliable timber and wood services.
                    </p>

                </div>

            </div>


            <!-- IMAGE 3 -->

            <div class="gallery-card">

                <img
                    src="images/tree3.jpg"
                    alt="Arnold Lumberjack tree cutting"
                >

                <div class="gallery-caption">

                    <h3>Tree Cutting</h3>

                    <p>
                        Professional tree cutting services.
                    </p>

                </div>

            </div>


            <!-- IMAGE 4 -->

            <div class="gallery-card">

                <img
                    src="images/tree4.jpg"
                    alt="Arnold Lumberjack outdoor services"
                >

                <div class="gallery-caption">

                    <h3>Outdoor Services</h3>

                    <p>
                        Dependable services for homes,
                        farms and businesses.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>Need Our Services?</h2>

    <p>
        Contact Arnold Lumberjack Services today
        for your project.
    </p>

    <a href="contact.php" class="btn">
        Get a Quote
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

            <p>
                ✉️
                kariukiarnold1@gmail.com
            </p>

            <p>
                📍 Sagana, Kirinyaga County
            </p>

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
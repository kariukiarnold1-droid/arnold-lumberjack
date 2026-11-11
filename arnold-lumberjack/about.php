<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Learn more about Arnold Lumberjack Services in Sagana, Kirinyaga County.">

    <title>About Us | Arnold Lumberjack Services</title>

    <link rel="stylesheet" href="style.css">


    <style>

        /* =========================
           ABOUT HERO
        ========================= */

        .about-hero {

            min-height: 55vh;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.60),
                    rgba(0, 0, 0, 0.60)
                ),
                url("images/about.jpg");

            background-size: cover;

            background-position: center;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: white;

            padding: 50px 20px;
        }


        .about-hero h1 {

            font-size: 50px;

            margin-bottom: 15px;
        }


        .about-hero p {

            font-size: 20px;
        }


        /* =========================
           ABOUT MAIN
        ========================= */

        .about-main {

            background: white;
        }


        .about-content {

            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 50px;

            align-items: center;
        }


        .about-content img {

            width: 100%;

            height: 400px;

            object-fit: cover;

            border-radius: 12px;

            box-shadow:
                0 10px 25px rgba(0,0,0,0.15);
        }


        .about-content h2 {

            color: #17210f;

            font-size: 36px;

            margin-bottom: 18px;
        }


        .about-content p {

            color: #555;

            margin-bottom: 18px;

            line-height: 1.7;
        }


        /* =========================
           LOCATION
        ========================= */

        .location-box {

            background: #eee9dd;

            padding: 25px;

            border-left: 5px solid #e7a83b;

            border-radius: 6px;

            margin-top: 25px;
        }


        .location-box h3 {

            color: #17210f;

            margin-bottom: 8px;
        }


        /* =========================
           VALUES
        ========================= */

        .values {

            background: #f5f2ea;
        }


        .values-grid {

            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 25px;
        }


        .value-card {

            background: white;

            padding: 30px;

            text-align: center;

            border-radius: 10px;

            box-shadow:
                0 5px 18px rgba(0,0,0,0.08);
        }


        .value-card .value-icon {

            font-size: 42px;

            margin-bottom: 15px;
        }


        .value-card h3 {

            color: #17210f;

            margin-bottom: 10px;
        }


        .value-card p {

            color: #666;

            line-height: 1.6;
        }


        /* =========================
           PHOTO GALLERY
        ========================= */

        .about-gallery {

            background: white;

            padding: 60px 20px;
        }


        .about-gallery-grid {

            max-width: 1100px;

            margin: 30px auto 0;

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;
        }


        .about-gallery-grid img {

            width: 100%;

            height: 220px;

            object-fit: cover;

            border-radius: 10px;

            box-shadow:
                0 5px 15px rgba(0,0,0,0.10);
        }


        /* =========================
           CTA
        ========================= */

        .about-cta {

            background: #17210f;

            color: white;

            text-align: center;

            padding: 60px 20px;
        }


        .about-cta h2 {

            font-size: 34px;

            margin-bottom: 15px;
        }


        .about-cta p {

            margin-bottom: 25px;
        }


        .about-cta .btn {

            display: inline-block;

            margin: 5px;

            text-decoration: none;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 800px) {

            .about-hero h1 {

                font-size: 36px;
            }


            .about-hero p {

                font-size: 17px;
            }


            .about-content {

                grid-template-columns: 1fr;

            }


            .about-content img {

                height: 300px;
            }


            .values-grid {

                grid-template-columns: 1fr;
            }


            .about-gallery-grid {

                grid-template-columns: 1fr 1fr;
            }

        }


        @media (max-width: 500px) {

            .about-gallery-grid {

                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     HEADER
========================= -->

<header>

    <div class="logo">

        🌲 Arnold
        <span>Lumberjack Services</span>

    </div>


    <nav>

        <ul>

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>


            <li>
                <a href="about.php">
                    About
                </a>
            </li>


            <li>
                <a href="services.php">
                    Services
                </a>
            </li>


            <li>
                <a href="gallery.php">
                    Gallery
                </a>
            </li>


            <li>
                <a href="contact.php">
                    Contact
                </a>
            </li>

        </ul>

    </nav>

</header>


<!-- =========================
     HERO
========================= -->

<section class="about-hero">

    <div>

        <h1>
            About Arnold Lumberjack Services
        </h1>


        <p>
            Professional tree and timber services in
            Sagana, Kirinyaga County.
        </p>

    </div>

</section>


<!-- =========================
     ABOUT CONTENT
========================= -->

<section class="about-main">

    <div class="about-content">


        <div>

            <img
                src="images/about.jpg"
                alt="Arnold Lumberjack Services"
            >

        </div>


        <div>

            <h2>
                Professional Lumberjack Services
            </h2>


            <p>

                Arnold Lumberjack Services provides reliable
                tree cutting, pruning, firewood, timber and
                land-clearing services for homes, businesses
                and other properties.

            </p>


            <p>

                Our goal is to provide professional and
                dependable services while maintaining a
                strong focus on customer satisfaction and
                responsible work practices.

            </p>


            <p>

                Whether you need a tree removed, branches
                trimmed, firewood prepared or land cleared,
                our team is ready to discuss your project.

            </p>


            <div class="location-box">

                <h3>
                    📍 Our Location
                </h3>


                <p>

                    <strong>
                        Main Branch:
                    </strong>

                    <br>

                    Sagana, Kirinyaga County, Kenya

                </p>

            </div>

        </div>


    </div>

</section>


<!-- =========================
     WHY CHOOSE US
========================= -->

<section class="values">

    <div class="section-title">

        <h2>
            Why Choose Us?
        </h2>


        <p>
            We are committed to providing dependable
            lumberjack and tree services.
        </p>

    </div>


    <div class="values-grid">


        <div class="value-card">

            <div class="value-icon">
                🌳
            </div>


            <h3>
                Professional Service
            </h3>


            <p>

                We approach every project with care,
                planning and professionalism.

            </p>

        </div>


        <div class="value-card">

            <div class="value-icon">
                🪓
            </div>


            <h3>
                Quality Work
            </h3>


            <p>

                We aim to deliver reliable workmanship
                for every customer and project.

            </p>

        </div>


        <div class="value-card">

            <div class="value-icon">
                🤝
            </div>


            <h3>
                Customer Focused
            </h3>


            <p>

                We listen to your needs and work toward
                a solution that suits your project.

            </p>

        </div>


    </div>

</section>


<!-- =========================
     PHOTO GALLERY
========================= -->

<section class="about-gallery">

    <div class="section-title">

        <h2>
            Our Work
        </h2>


        <p>
            A look at some of the work and equipment
            associated with our lumberjack services.
        </p>

    </div>


    <div class="about-gallery-grid">


        <img
            src="images/tree1.jpg"
            alt="Lumberjack tree work"
        >


        <img
            src="images/tree2.jpg"
            alt="Tree cutting service"
        >


        <img
            src="images/tree3.jpg"
            alt="Tree and timber work"
        >


        <img
            src="images/tree4.jpg"
            alt="Professional lumberjack work"
        >


    </div>

</section>


<!-- =========================
     CALL TO ACTION
========================= -->

<section class="about-cta">

    <h2>
        Need Lumberjack Services?
    </h2>


    <p>

        Contact Arnold Lumberjack Services today
        for your project.

    </p>


    <a
        href="contact.php"
        class="btn btn-primary"
    >
        Get a Quote
    </a>


    <a
        href="tel:0718332160"
        class="btn btn-secondary"
    >
        Call 0718 332 160
    </a>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>

        <strong>
            🌲 Arnold Lumberjack Services
        </strong>

    </p>


    <p>

        Professional tree, timber and land services
        in Sagana, Kirinyaga County.

    </p>


    <p>

        📞

        <a href="tel:0718332160">
            0718 332 160
        </a>

    </p>


    <p>

        ✉️

        <a href="mailto:kariukiarnold1@gmail.com">
            kariukiarnold1@gmail.com
        </a>

    </p>


    <p>

        © 2026 Arnold Lumberjack Services.
        All Rights Reserved.

    </p>

</footer>


</body>

</html>
<?php
// Arnold Lumberjack Services - Contact Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Arnold Lumberjack Services</title>

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

        .contact-hero {
            background: #24342b;
            color: white;
            text-align: center;
            padding: 70px 20px;
        }

        .contact-hero small {
            color: #d99b36;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .contact-hero h1 {
            font-size: 45px;
            margin: 15px 0;
        }

        .contact-hero p {
            color: #ddd;
            font-size: 18px;
        }

        /* CONTACT SECTION */

        .contact-section {
            padding: 70px 5%;
            background: white;
        }

        .contact-container {
            max-width: 1100px;
            margin: auto;

            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 40px;
        }

        /* CONTACT INFORMATION */

        .contact-info h2 {
            color: #24342b;
            font-size: 32px;
            margin-bottom: 15px;
        }

        .contact-info > p {
            color: #666;
            margin-bottom: 25px;
        }

        .info-box {
            background: #f5f5f5;
            padding: 18px;
            margin-bottom: 15px;
            border-left: 4px solid #d99b36;
            border-radius: 5px;
        }

        .info-box h3 {
            color: #24342b;
            margin-bottom: 5px;
        }

        .info-box p {
            color: #666;
        }

        .info-box a {
            color: #555;
            text-decoration: none;
        }

        .info-box a:hover {
            color: #d99b36;
        }

        /* FORM */

        .contact-form {
            background: #f7f7f7;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .contact-form h2 {
            color: #24342b;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form-group textarea {
            height: 140px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #d99b36;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            border: none;
            background: #d99b36;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #b77d25;
        }

        /* CTA */

        .cta {
            background: #24342b;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .cta h2 {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .cta p {
            color: #ddd;
            margin-bottom: 20px;
        }

        .call-btn {
            display: inline-block;
            background: #d99b36;
            color: white;
            padding: 13px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        .call-btn:hover {
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

            .contact-hero h1 {
                font-size: 35px;
            }

            .contact-container {
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

<section class="contact-hero">

    <small>GET IN TOUCH</small>

    <h1>Contact Us</h1>

    <p>
        Let's discuss your tree, timber or land clearing project.
    </p>

</section>


<!-- CONTACT -->

<section class="contact-section">

    <div class="contact-container">


        <!-- CONTACT INFORMATION -->

        <div class="contact-info">

            <h2>Let's Talk</h2>

            <p>
                Have a project in mind? Contact Arnold Lumberjack
                Services and tell us what you need.
            </p>


            <div class="info-box">

                <h3>📞 Phone</h3>

                <p>
                    <a href="tel:0718332160">
                        0718 332 160
                    </a>
                </p>

            </div>


            <div class="info-box">

                <h3>✉️ Email</h3>

                <p>
                    <a href="mailto:kariukiarnold1@gmail.com">
                        kariukiarnold1@gmail.com
                    </a>
                </p>

            </div>


            <div class="info-box">

                <h3>📍 Location</h3>

                <p>
                    Sagana, Kirinyaga County, Kenya
                </p>

            </div>


            <div class="info-box">

                <h3>🌲 Services</h3>

                <p>
                    Tree cutting, pruning, firewood,
                    timber services and land clearing.
                </p>

            </div>

        </div>


        <!-- CONTACT FORM -->

        <div class="contact-form">

            <h2>Request a Quote</h2>

            <form action="process_contact.php" method="POST">


                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="phone">
                        Phone Number
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="e.g. 0718 332 160"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                    >

                </div>


                <div class="form-group">

                    <label for="service">
                        Service Required
                    </label>

                    <select
                        id="service"
                        name="service"
                        required
                    >

                        <option value="">
                            Select a service
                        </option>

                        <option value="Tree Cutting">
                            Tree Cutting
                        </option>

                        <option value="Tree Pruning">
                            Tree Pruning
                        </option>

                        <option value="Firewood Services">
                            Firewood Services
                        </option>

                        <option value="Timber Services">
                            Timber Services
                        </option>

                        <option value="Land Clearing">
                            Land Clearing
                        </option>

                        <option value="Property Services">
                            Property Services
                        </option>

                        <option value="Other">
                            Other
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label for="message">
                        Project Details
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        placeholder="Tell us about the work you need..."
                        required
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="submit-btn"
                >
                    Send Request
                </button>


            </form>

        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>Need Help With Your Project?</h2>

    <p>
        Call us directly and let's discuss your requirements.
    </p>

    <a
        href="tel:0718332160"
        class="call-btn"
    >
        📞 Call 0718 332 160
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
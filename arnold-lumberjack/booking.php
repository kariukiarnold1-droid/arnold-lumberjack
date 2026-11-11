<?php

require_once "config/database.php";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $location = trim($_POST["location"] ?? "");
    $service = trim($_POST["service"] ?? "");
    $booking_date = trim($_POST["booking_date"] ?? "");
    $message = trim($_POST["message"] ?? "");

    /* Validate required fields */

    if (
        empty($name) ||
        empty($phone) ||
        empty($location) ||
        empty($service) ||
        empty($message)
    ) {

        $error = "Please fill in all required fields.";

    } elseif (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Please enter a valid email address.";

    } else {

        /*
         * Insert booking safely using a prepared statement.
         */

        $sql = "INSERT INTO bookings
                (name, phone, email, location, service, booking_date, message)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if ($stmt) {

            $stmt->bind_param(
                "sssssss",
                $name,
                $phone,
                $email,
                $location,
                $service,
                $booking_date,
                $message
            );

            if ($stmt->execute()) {

                $success = "Your booking request has been submitted successfully. We will contact you soon.";

                /*
                 * Clear form values after successful submission.
                 */

                $name = "";
                $phone = "";
                $email = "";
                $location = "";
                $service = "";
                $booking_date = "";
                $message = "";

            } else {

                $error = "Sorry, your booking could not be submitted. Please try again.";

            }

            $stmt->close();

        } else {

            $error = "Database error. Please try again later.";

        }

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Book Arnold Lumberjack Services in Sagana, Kirinyaga County.">

    <title>Book a Service | Arnold Lumberjack Services</title>

    <link rel="stylesheet"
          href="assets/css/style.css">

</head>


<body>


<!-- =====================================================
     NAVIGATION
===================================================== -->

<header class="site-header">

    <div class="container">

        <a href="index.php" class="logo">

            🌲 Arnold Lumberjack Services

        </a>


        <nav>

            <a href="index.php">
                Home
            </a>

            <a href="about.php">
                About
            </a>

            <a href="services.php">
                Services
            </a>

            <a href="gallery.php">
                Gallery
            </a>

            <a href="booking.php" class="active">
                Book
            </a>

            <a href="contact.php">
                Contact
            </a>

        </nav>

    </div>

</header>


<!-- =====================================================
     PAGE HEADER
===================================================== -->

<section class="page-header">

    <div class="container">

        <span class="section-label">
            PROFESSIONAL TREE SERVICES
        </span>

        <h1>
            Book Our Services
        </h1>

        <p>
            Tell us what you need and we'll get in touch
            with you to discuss your project.
        </p>

    </div>

</section>


<!-- =====================================================
     BOOKING SECTION
===================================================== -->

<section class="booking-section">

    <div class="container booking-grid">


        <!-- =================================================
             BOOKING FORM
        ================================================== -->

        <div class="booking-form-card">

            <h2>
                Request a Service
            </h2>

            <p>
                Fill in the details below.
            </p>


            <!-- SUCCESS MESSAGE -->

            <?php if (!empty($success)): ?>

                <div class="form-success">

                    ✅
                    <?php echo htmlspecialchars($success); ?>

                </div>

            <?php endif; ?>


            <!-- ERROR MESSAGE -->

            <?php if (!empty($error)): ?>

                <div class="form-error">

                    ⚠️
                    <?php echo htmlspecialchars($error); ?>

                </div>

            <?php endif; ?>


            <form method="POST"
                  action="booking.php">


                <!-- NAME -->

                <div class="form-group">

                    <label for="name">
                        Full Name *
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="<?php echo htmlspecialchars($name ?? ""); ?>"
                        placeholder="Enter your full name"
                        required
                    >

                </div>


                <!-- PHONE -->

                <div class="form-group">

                    <label for="phone">
                        Phone Number *
                    </label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        value="<?php echo htmlspecialchars($phone ?? ""); ?>"
                        placeholder="e.g. 0718 332 160"
                        required
                    >

                </div>


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="<?php echo htmlspecialchars($email ?? ""); ?>"
                        placeholder="your@email.com"
                    >

                </div>


                <!-- LOCATION -->

                <div class="form-group">

                    <label for="location">
                        Project Location *
                    </label>

                    <input
                        type="text"
                        id="location"
                        name="location"
                        value="<?php echo htmlspecialchars($location ?? ""); ?>"
                        placeholder="e.g. Sagana, Kirinyaga"
                        required
                    >

                </div>


                <!-- SERVICE -->

                <div class="form-group">

                    <label for="service">
                        Service Required *
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

                        <option value="Land Clearing">
                            Land Clearing
                        </option>

                        <option value="Stump Removal">
                            Stump Removal
                        </option>

                        <option value="Firewood Supply">
                            Firewood Supply
                        </option>

                        <option value="Timber Services">
                            Timber Services
                        </option>

                        <option value="Other">
                            Other
                        </option>

                    </select>

                </div>


                <!-- DATE -->

                <div class="form-group">

                    <label for="booking_date">
                        Preferred Date
                    </label>

                    <input
                        type="date"
                        id="booking_date"
                        name="booking_date"
                        value="<?php echo htmlspecialchars($booking_date ?? ""); ?>"
                    >

                </div>


                <!-- MESSAGE -->

                <div class="form-group">

                    <label for="message">
                        Project Details *
                    </label>

                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Tell us about the work you need..."
                        required
                    ><?php echo htmlspecialchars($message ?? ""); ?></textarea>

                </div>


                <!-- SUBMIT -->

                <button
                    type="submit"
                    class="btn btn-primary booking-submit"
                >

                    📋 Submit Booking Request

                </button>


            </form>

        </div>


        <!-- =================================================
             CONTACT INFORMATION
        ================================================== -->

        <div class="booking-info">


            <div class="booking-info-card">


                <span class="section-label">
                    GET IN TOUCH
                </span>


                <h2>
                    Let's Discuss Your Project
                </h2>


                <p>
                    Whether you need tree cutting, pruning,
                    land clearing, firewood, timber services
                    or stump removal, contact us for a
                    quotation.
                </p>


                <!-- PHONE -->

                <div class="contact-item">

                    <div class="contact-icon">
                        📞
                    </div>


                    <div>

                        <span>
                            Call Us
                        </span>

                        <a href="tel:0718332160">
                            0718 332 160
                        </a>

                    </div>

                </div>


                <!-- EMAIL -->

                <div class="contact-item">

                    <div class="contact-icon">
                        ✉️
                    </div>


                    <div>

                        <span>
                            Email
                        </span>

                        <a href="mailto:kariukiarnold1@gmail.com">
                            kariukiarnold1@gmail.com
                        </a>

                    </div>

                </div>


                <!-- LOCATION -->

                <div class="contact-item">

                    <div class="contact-icon">
                        📍
                    </div>


                    <div>

                        <span>
                            Main Branch
                        </span>

                        <strong>
                            Sagana, Kirinyaga County
                        </strong>

                    </div>

                </div>


            </div>


            <!-- QUICK CALL -->

            <div class="quick-call-card">

                <h3>
                    Need Urgent Assistance?
                </h3>

                <p>
                    Call us directly for quick assistance
                    with your project.
                </p>


                <a href="tel:0718332160"
                   class="btn btn-primary">

                    📞 Call 0718 332 160

                </a>

            </div>


        </div>


    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="site-footer">

    <div class="container">

        <div>

            <h3>
                🌲 Arnold Lumberjack Services
            </h3>

            <p>
                Professional tree and timber services
                in Sagana, Kirinyaga County.
            </p>

        </div>


        <div>

            <h4>
                Contact
            </h4>

            <p>
                📞 0718 332 160
            </p>

            <p>
                ✉️ kariukiarnold1@gmail.com
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 Arnold Lumberjack Services.
            All rights reserved.
        </p>

    </div>

</footer>


</body>

</html>
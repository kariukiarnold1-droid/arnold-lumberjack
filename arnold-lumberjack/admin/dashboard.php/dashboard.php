<?php

session_start();

/*
|--------------------------------------------------------------------------
| ADMIN LOGIN PROTECTION
|--------------------------------------------------------------------------
*/

if (
    !isset($_SESSION["admin_logged_in"]) ||
    $_SESSION["admin_logged_in"] !== true
) {
    header("Location: ../login.php");
    exit;
}

$admin_username = $_SESSION["admin_username"] ?? "Admin";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Arnold Lumberjack Services Admin Dashboard">

    <title>Admin Dashboard | Arnold Lumberjack Services</title>

    <link rel="stylesheet"
          href="../assets/css/style.css">

</head>


<body class="admin-page">


<!-- =====================================================
     ADMIN HEADER
===================================================== -->

<header class="admin-header">

    <div class="admin-header-container">


        <!-- LOGO -->

        <a href="../index.php"
           class="admin-logo">

            <span class="admin-logo-icon">
                🌲
            </span>

            <span>
                Arnold Lumberjack Services
            </span>

        </a>


        <!-- USER AREA -->

        <div class="admin-user">

            <span>
                Welcome,
                <?php echo htmlspecialchars($admin_username); ?>
            </span>


            <a href="../logout.php"
               class="logout-button">

                Logout

            </a>

        </div>

    </div>

</header>


<!-- =====================================================
     MAIN DASHBOARD
===================================================== -->

<main class="admin-main">

    <div class="admin-container">


        <!-- =================================================
             PAGE TITLE
        ================================================== -->

        <div class="admin-title">


            <div>

                <span class="section-label">
                    ADMINISTRATION
                </span>


                <h1>
                    Dashboard
                </h1>


                <p>
                    Manage Arnold Lumberjack Services
                    from one place.
                </p>

            </div>


            <a href="../index.php"
               class="btn btn-primary">

                🌐 View Website

            </a>

        </div>


        <!-- =================================================
             STATISTICS
        ================================================== -->

        <div class="admin-stats">


            <!-- BOOKINGS -->

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    📋
                </div>


                <div>

                    <span>
                        Booking Requests
                    </span>


                    <strong>
                        0
                    </strong>

                </div>

            </div>


            <!-- MESSAGES -->

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    💬
                </div>


                <div>

                    <span>
                        Customer Messages
                    </span>


                    <strong>
                        0
                    </strong>

                </div>

            </div>


            <!-- SERVICES -->

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    🌲
                </div>


                <div>

                    <span>
                        Services
                    </span>


                    <strong>
                        6
                    </strong>

                </div>

            </div>


            <!-- LOCATION -->

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    📍
                </div>


                <div>

                    <span>
                        Main Branch
                    </span>


                    <strong>
                        Sagana
                    </strong>

                </div>

            </div>


        </div>


        <!-- =================================================
             QUICK ACTIONS
        ================================================== -->

        <section class="admin-section">


            <div class="admin-section-heading">

                <div>

                    <span class="section-label">
                        MANAGEMENT
                    </span>


                    <h2>
                        Quick Actions
                    </h2>

                </div>

            </div>


            <div class="admin-actions">


                <!-- BOOKINGS -->

                <a href="bookings.php"
                   class="admin-action-card">


                    <div class="admin-action-icon">
                        📋
                    </div>


                    <div>

                        <h3>
                            Booking Requests
                        </h3>


                        <p>
                            View and manage customer
                            service requests.
                        </p>

                    </div>


                    <span class="admin-arrow">
                        →
                    </span>


                </a>


                <!-- MESSAGES -->

                <a href="messages.php"
                   class="admin-action-card">


                    <div class="admin-action-icon">
                        💬
                    </div>


                    <div>

                        <h3>
                            Customer Messages
                        </h3>


                        <p>
                            View messages submitted
                            through the contact form.
                        </p>

                    </div>


                    <span class="admin-arrow">
                        →
                    </span>


                </a>


                <!-- WEBSITE -->

                <a href="../index.php"
                   class="admin-action-card">


                    <div class="admin-action-icon">
                        🌐
                    </div>


                    <div>

                        <h3>
                            View Website
                        </h3>


                        <p>
                            Open the public Arnold
                            Lumberjack Services website.
                        </p>

                    </div>


                    <span class="admin-arrow">
                        →
                    </span>


                </a>


                <!-- LOGOUT -->

                <a href="../logout.php"
                   class="admin-action-card">


                    <div class="admin-action-icon">
                        🔐
                    </div>


                    <div>

                        <h3>
                            Logout
                        </h3>


                        <p>
                            Securely end your admin
                            session.
                        </p>

                    </div>


                    <span class="admin-arrow">
                        →
                    </span>


                </a>


            </div>

        </section>


        <!-- =================================================
             BUSINESS INFORMATION
        ================================================== -->

        <section class="admin-section">


            <div class="admin-section-heading">

                <div>

                    <span class="section-label">
                        BUSINESS INFORMATION
                    </span>


                    <h2>
                        Arnold Lumberjack Services
                    </h2>

                </div>

            </div>


            <div class="business-info-card">


                <!-- LOCATION -->

                <div class="business-info-item">

                    <span>
                        📍 Location
                    </span>


                    <strong>
                        Sagana, Kirinyaga County
                    </strong>

                </div>


                <!-- PHONE -->

                <div class="business-info-item">

                    <span>
                        📞 Phone
                    </span>


                    <strong>
                        0718 332 160
                    </strong>

                </div>


                <!-- EMAIL -->

                <div class="business-info-item">

                    <span>
                        ✉️ Email
                    </span>


                    <strong>
                        kariukiarnold1@gmail.com
                    </strong>

                </div>


                <!-- SERVICES -->

                <div class="business-info-item">

                    <span>
                        🌲 Main Services
                    </span>


                    <strong>
                        Tree, Timber & Land Services
                    </strong>

                </div>


            </div>

        </section>


        <!-- =================================================
             ADMIN NOTICE
        ================================================== -->

        <section class="admin-section">


            <div class="admin-notice">

                <div class="admin-notice-icon">
                    ℹ️
                </div>


                <div>

                    <h3>
                        Dashboard Setup
                    </h3>


                    <p>
                        Your dashboard is currently connected
                        to the login system. We will connect
                        customer bookings and contact messages
                        to the MySQL database in the next stage.
                    </p>

                </div>

            </div>

        </section>


    </div>

</main>


<!-- =====================================================
     ADMIN FOOTER
===================================================== -->

<footer class="admin-footer">

    <p>

        © 2026 Arnold Lumberjack Services.
        Admin Panel.

    </p>

</footer>


</body>

</html>
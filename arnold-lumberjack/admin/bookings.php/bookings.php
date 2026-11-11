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


/*
|--------------------------------------------------------------------------
| DATABASE CONNECTION
|--------------------------------------------------------------------------
*/

require_once "../config/database.php";


/*
|--------------------------------------------------------------------------
| GET BOOKINGS
|--------------------------------------------------------------------------
*/

$bookings = [];

$sql = "SELECT * FROM bookings ORDER BY created_at DESC";

$result = $conn->query($sql);

if ($result) {

    while ($row = $result->fetch_assoc()) {

        $bookings[] = $row;

    }

}

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Booking Requests | Arnold Lumberjack Services
    </title>

    <link rel="stylesheet"
          href="../assets/css/style.css">

</head>


<body class="admin-page">


<!-- =====================================================
     ADMIN HEADER
===================================================== -->

<header class="admin-header">

    <div class="admin-header-container">


        <a href="dashboard.php"
           class="admin-logo">

            🌲 Arnold Lumberjack Services

        </a>


        <div class="admin-user">

            <span>

                Welcome,

                <?php

                echo htmlspecialchars(
                    $_SESSION["admin_username"] ?? "Admin"
                );

                ?>

            </span>


            <a href="../logout.php"
               class="logout-button">

                Logout

            </a>

        </div>


    </div>

</header>



<!-- =====================================================
     MAIN CONTENT
===================================================== -->

<main class="admin-main">

    <div class="admin-container">


        <!-- PAGE TITLE -->

        <div class="admin-title">

            <div>

                <span class="section-label">

                    CUSTOMER MANAGEMENT

                </span>


                <h1>

                    Booking Requests

                </h1>


                <p>

                    View customer requests submitted
                    through the website.

                </p>

            </div>


            <a href="dashboard.php"
               class="btn btn-primary">

                ← Dashboard

            </a>

        </div>



        <!-- =================================================
             BOOKING COUNT
        ================================================== -->

        <div class="admin-stats">


            <div class="admin-stat-card">


                <div class="admin-stat-icon">

                    📋

                </div>


                <div>

                    <span>

                        Total Bookings

                    </span>


                    <strong>

                        <?php echo count($bookings); ?>

                    </strong>

                </div>


            </div>


            <div class="admin-stat-card">


                <div class="admin-stat-icon">

                    ⏳

                </div>


                <div>

                    <span>

                        Pending

                    </span>


                    <strong>

                        <?php

                        $pending = 0;

                        foreach ($bookings as $booking) {

                            if (
                                strtolower(
                                    $booking["status"]
                                ) === "pending"
                            ) {

                                $pending++;

                            }

                        }

                        echo $pending;

                        ?>

                    </strong>

                </div>


            </div>


        </div>



        <!-- =================================================
             BOOKINGS TABLE
        ================================================== -->

        <section class="admin-section">


            <div class="admin-section-heading">


                <div>

                    <span class="section-label">

                        CUSTOMER REQUESTS

                    </span>


                    <h2>

                        Recent Bookings

                    </h2>

                </div>


            </div>



            <div class="admin-table-wrapper">


                <table class="admin-table">


                    <thead>

                        <tr>

                            <th>
                                #
                            </th>

                            <th>
                                Customer
                            </th>

                            <th>
                                Phone
                            </th>

                            <th>
                                Service
                            </th>

                            <th>
                                Location
                            </th>

                            <th>
                                Date
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Submitted
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                    <?php if (count($bookings) > 0): ?>


                        <?php foreach ($bookings as $booking): ?>


                            <tr>


                                <td>

                                    <?php

                                    echo htmlspecialchars(
                                        $booking["id"]
                                    );

                                    ?>

                                </td>


                                <td>

                                    <strong>

                                        <?php

                                        echo htmlspecialchars(
                                            $booking["name"]
                                        );

                                        ?>

                                    </strong>


                                    <?php

                                    if (!empty($booking["email"])):

                                    ?>

                                        <br>

                                        <small>

                                            <?php

                                            echo htmlspecialchars(
                                                $booking["email"]
                                            );

                                            ?>

                                        </small>

                                    <?php endif; ?>

                                </td>


                                <td>

                                    <a
                                        href="tel:<?php
                                        echo htmlspecialchars(
                                            $booking["phone"]
                                        );
                                        ?>"
                                    >

                                        <?php

                                        echo htmlspecialchars(
                                            $booking["phone"]
                                        );

                                        ?>

                                    </a>

                                </td>


                                <td>

                                    <?php

                                    echo htmlspecialchars(
                                        $booking["service"]
                                    );

                                    ?>

                                </td>


                                <td>

                                    <?php

                                    echo htmlspecialchars(
                                        $booking["location"]
                                    );

                                    ?>

                                </td>


                                <td>

                                    <?php

                                    if (
                                        !empty(
                                            $booking["booking_date"]
                                        )
                                    ) {

                                        echo htmlspecialchars(
                                            $booking["booking_date"]
                                        );

                                    } else {

                                        echo "Not specified";

                                    }

                                    ?>

                                </td>


                                <td>

                                    <span class="status-badge">

                                        <?php

                                        echo htmlspecialchars(
                                            $booking["status"]
                                        );

                                        ?>

                                    </span>

                                </td>


                                <td>

                                    <?php

                                    echo htmlspecialchars(
                                        $booking["created_at"]
                                    );

                                    ?>

                                </td>


                            </tr>


                        <?php endforeach; ?>


                    <?php else: ?>


                        <tr>

                            <td colspan="8"
                                class="empty-table">


                                <div class="empty-icon">

                                    📋

                                </div>


                                <h3>

                                    No Booking Requests Yet

                                </h3>


                                <p>

                                    When customers submit
                                    booking requests, they
                                    will appear here.

                                </p>


                            </td>

                        </tr>


                    <?php endif; ?>


                    </tbody>

                </table>


            </div>

        </section>



        <!-- =================================================
             CUSTOMER CONTACT
        ================================================== -->

        <section class="admin-section">


            <div class="admin-notice">


                <div class="admin-notice-icon">

                    📞

                </div>


                <div>

                    <h3>

                        Need to contact a customer?

                    </h3>


                    <p>

                        Use the phone number or email
                        displayed in the booking list
                        to contact the customer.

                    </p>

                </div>


            </div>


        </section>


    </div>

</main>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="admin-footer">

    <p>

        © 2026 Arnold Lumberjack Services.
        Admin Panel.

    </p>

</footer>


</body>

</html>
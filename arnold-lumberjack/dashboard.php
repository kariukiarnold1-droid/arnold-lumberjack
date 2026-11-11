<?php

session_start();

/*
    Check admin login
*/
if (
    !isset($_SESSION['admin_logged_in']) ||
    $_SESSION['admin_logged_in'] !== true
) {
    header("Location: admin.php");
    exit;
}


/*
    Database connection
*/
require_once __DIR__ . "/config/database.php";


/*
    Get customer requests
*/
$result = $conn->query(
    "SELECT * FROM messages ORDER BY id DESC"
);

$total_requests = $result ? $result->num_rows : 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Arnold Lumberjack Services Admin Dashboard">

    <title>
        Admin Dashboard | Arnold Lumberjack Services
    </title>


    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            font-family: Arial, sans-serif;

            background: #f4f5f7;

            color: #333;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;

            left: 0;
            top: 0;

            width: 230px;
            height: 100vh;

            background: #251b2d;

            color: white;

            padding: 25px 15px;
        }


        .logo {
            font-size: 21px;

            font-weight: bold;

            text-align: center;

            margin-bottom: 35px;

            line-height: 1.4;
        }


        .sidebar a {
            display: block;

            color: white;

            text-decoration: none;

            padding: 14px;

            margin-bottom: 8px;

            border-radius: 6px;

            transition: 0.2s;
        }


        .sidebar a:hover {
            background: #d58b68;
        }


        .sidebar a.active {
            background: #d58b68;
        }


        /* =========================
           MAIN CONTENT
        ========================= */

        .main {
            margin-left: 230px;

            padding: 30px;
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            background: white;

            padding: 20px 25px;

            border-radius: 10px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.05);
        }


        .header h1 {
            margin: 0;

            color: #251b2d;

            font-size: 26px;
        }


        .logout {
            background: #d58b68;

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 6px;

            font-weight: bold;
        }


        .logout:hover {
            background: #b96b4c;
        }


        /* =========================
           DASHBOARD CARDS
        ========================= */

        .cards {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 20px;

            margin-bottom: 25px;
        }


        .card {
            background: white;

            padding: 25px;

            border-radius: 10px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.05);
        }


        .card h3 {
            margin-top: 0;

            color: #666;

            font-size: 15px;
        }


        .number {
            font-size: 32px;

            font-weight: bold;

            color: #251b2d;

            margin-top: 10px;
        }


        .card p {
            margin-bottom: 0;

            color: #2e8b57;

            font-weight: bold;
        }


        /* =========================
           CUSTOMER REQUESTS
        ========================= */

        .requests {
            background: white;

            padding: 25px;

            border-radius: 10px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.05);

            overflow-x: auto;
        }


        .requests h2 {
            margin-top: 0;

            color: #251b2d;
        }


        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 850px;
        }


        th {
            background: #251b2d;

            color: white;

            padding: 14px;

            text-align: left;

            font-size: 14px;
        }


        td {
            padding: 13px;

            border-bottom:
                1px solid #eee;

            font-size: 14px;

            vertical-align: top;
        }


        tr:hover {
            background: #fafafa;
        }


        /* =========================
           DELETE BUTTON
        ========================= */

        .delete {
            display: inline-block;

            background: #dc3545;

            color: white;

            text-decoration: none;

            padding: 7px 12px;

            border-radius: 5px;

            font-size: 13px;
        }


        .delete:hover {
            background: #b02a37;
        }


        /* =========================
           EMPTY MESSAGE
        ========================= */

        .empty {
            padding: 30px;

            text-align: center;

            color: #777;

            background: #f8f8f8;

            border-radius: 8px;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 900px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;

                padding: 15px;
            }


            .logo {
                margin-bottom: 15px;
            }


            .sidebar a {
                display: inline-block;

                margin-right: 5px;

                margin-bottom: 5px;
            }


            .main {
                margin-left: 0;

                padding: 15px;
            }


            .cards {
                grid-template-columns: 1fr;
            }


            .header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     SIDEBAR
========================== -->

<aside class="sidebar">


    <div class="logo">
        🌲 Arnold Lumberjack
    </div>


    <!-- DASHBOARD -->

    <a href="dashboard.php"
       class="active">

        📊 Dashboard

    </a>


    <!-- WEBSITE -->

    <a href="index.php">

        🌐 View Website

    </a>


    <!-- CONTACT -->

    <a href="contact.php">

        📩 Contact Page

    </a>


    <!-- SETTINGS -->

    <a href="settings.php">

        ⚙️ Settings

    </a>


    <!-- LOGOUT -->

    <a href="logout.php">

        🚪 Logout

    </a>


</aside>



<!-- =========================
     MAIN CONTENT
========================== -->

<main class="main">


    <!-- HEADER -->

    <div class="header">


        <h1>
            Admin Dashboard
        </h1>


        <a href="logout.php"
           class="logout">

            Logout

        </a>


    </div>



    <!-- =========================
         DASHBOARD CARDS
    ========================== -->

    <div class="cards">


        <!-- CUSTOMER REQUESTS -->

        <div class="card">

            <h3>
                Total Customer Requests
            </h3>


            <div class="number">

                <?php
                echo $total_requests;
                ?>

            </div>

        </div>



        <!-- WEBSITE -->

        <div class="card">

            <h3>
                Website
            </h3>


            <div class="number">
                🌐
            </div>


            <p>
                Online
            </p>

        </div>



        <!-- BUSINESS STATUS -->

        <div class="card">

            <h3>
                Business Status
            </h3>


            <div class="number">
                🟢
            </div>


            <p>
                Active
            </p>

        </div>


    </div>



    <!-- =========================
         CUSTOMER REQUESTS
    ========================== -->

    <div class="requests">


        <h2>
            Customer Requests
        </h2>


        <?php if ($total_requests > 0): ?>


            <table>


                <thead>

                    <tr>

                        <th>
                            ID
                        </th>

                        <th>
                            Name
                        </th>

                        <th>
                            Phone
                        </th>

                        <th>
                            Email
                        </th>

                        <th>
                            Service
                        </th>

                        <th>
                            Message
                        </th>

                        <th>
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>


                <?php while ($row = $result->fetch_assoc()): ?>


                    <tr>


                        <td>

                            <?php
                            echo htmlspecialchars(
                                $row['id']
                            );
                            ?>

                        </td>


                        <td>

                            <?php
                            echo htmlspecialchars(
                                $row['name']
                            );
                            ?>

                        </td>


                        <td>

                            <?php
                            echo htmlspecialchars(
                                $row['phone']
                            );
                            ?>

                        </td>


                        <td>

                            <?php
                            echo htmlspecialchars(
                                $row['email']
                            );
                            ?>

                        </td>


                        <td>

                            <?php
                            echo htmlspecialchars(
                                $row['service']
                            );
                            ?>

                        </td>


                        <td>

                            <?php
                            echo htmlspecialchars(
                                $row['message']
                            );
                            ?>

                        </td>


                        <td>


                            <a
                                href="delete_request.php?id=<?php echo (int)$row['id']; ?>"
                                class="delete"

                                onclick="return confirm('Are you sure you want to delete this customer request?');"
                            >

                                Delete

                            </a>


                        </td>


                    </tr>


                <?php endwhile; ?>


                </tbody>


            </table>


        <?php else: ?>


            <div class="empty">

                No customer requests yet.

            </div>


        <?php endif; ?>


    </div>


</main>


</body>

</html>
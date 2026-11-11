<?php

session_start();

/*
    Protect the settings page.
*/
if (
    !isset($_SESSION['admin_logged_in']) ||
    $_SESSION['admin_logged_in'] !== true
) {
    header("Location: admin.php");
    exit;
}

/*
    Database connection.
*/
require_once __DIR__ . "/config/database.php";

$message = "";
$error = "";


/*
    Save business settings.
*/
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $business_name = trim($_POST["business_name"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $location = trim($_POST["location"] ?? "");

    /*
        For now, save the settings in the session.
        We will connect them to a database table later.
    */
    $_SESSION["business_name"] = $business_name;
    $_SESSION["business_phone"] = $phone;
    $_SESSION["business_email"] = $email;
    $_SESSION["business_location"] = $location;

    $message = "Settings saved successfully.";
}


/*
    Load current settings.
*/
$business_name =
    $_SESSION["business_name"]
    ?? "Arnold Lumberjack Services";

$phone =
    $_SESSION["business_phone"]
    ?? "";

$email =
    $_SESSION["business_email"]
    ?? "";

$location =
    $_SESSION["business_location"]
    ?? "";

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Settings | Arnold Lumberjack Services
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


        /* SIDEBAR */

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
        }


        .sidebar a {
            display: block;

            color: white;

            text-decoration: none;

            padding: 14px;

            margin-bottom: 8px;

            border-radius: 6px;
        }


        .sidebar a:hover,
        .sidebar a.active {
            background: #d58b68;
        }


        /* MAIN */

        .main {
            margin-left: 230px;

            padding: 30px;
        }


        .header {
            background: white;

            padding: 20px 25px;

            border-radius: 10px;

            margin-bottom: 25px;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .header h1 {
            margin: 0;

            color: #251b2d;
        }


        .logout {
            background: #d58b68;

            color: white;

            text-decoration: none;

            padding: 10px 18px;

            border-radius: 6px;

            font-weight: bold;
        }


        /* SETTINGS CARD */

        .settings-card {
            background: white;

            padding: 30px;

            border-radius: 10px;

            max-width: 800px;

            box-shadow:
                0 3px 12px rgba(0,0,0,0.05);
        }


        .settings-card h2 {
            margin-top: 0;

            color: #251b2d;
        }


        .form-group {
            margin-bottom: 20px;
        }


        label {
            display: block;

            margin-bottom: 7px;

            font-weight: bold;

            color: #444;
        }


        input,
        textarea {
            width: 100%;

            padding: 13px;

            border: 1px solid #ccc;

            border-radius: 6px;

            font-size: 15px;

            font-family: Arial, sans-serif;
        }


        textarea {
            min-height: 100px;

            resize: vertical;
        }


        input:focus,
        textarea:focus {
            outline: none;

            border-color: #d58b68;
        }


        .save-button {
            background: #d58b68;

            color: white;

            border: none;

            padding: 13px 25px;

            border-radius: 6px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;
        }


        .save-button:hover {
            background: #b96e4d;
        }


        .success {
            background: #e6f7e9;

            color: #26733a;

            padding: 12px;

            border-radius: 6px;

            margin-bottom: 20px;
        }


        /* MOBILE */

        @media (max-width: 800px) {

            .sidebar {
                position: relative;

                width: 100%;

                height: auto;
            }


            .main {
                margin-left: 0;

                padding: 15px;
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


<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        🌲 Arnold Lumberjack
    </div>


    <a href="dashboard.php">
        📊 Dashboard
    </a>


    <a href="index.php">
        🌐 View Website
    </a>


    <a href="contact.php">
        📩 Contact Page
    </a>


    <a href="settings.php" class="active">
        ⚙️ Settings
    </a>


    <a href="logout.php">
        🚪 Logout
    </a>

</div>


<!-- MAIN -->

<div class="main">


    <div class="header">

        <h1>
            Settings
        </h1>


        <a
            href="logout.php"
            class="logout"
        >
            Logout
        </a>

    </div>


    <div class="settings-card">

        <h2>
            Business Information
        </h2>


        <?php if (!empty($message)): ?>

            <div class="success">

                <?php
                echo htmlspecialchars($message);
                ?>

            </div>

        <?php endif; ?>


        <form method="POST">


            <div class="form-group">

                <label for="business_name">
                    Business Name
                </label>

                <input
                    type="text"
                    id="business_name"
                    name="business_name"
                    value="<?php echo htmlspecialchars($business_name); ?>"
                    required
                >

            </div>


            <div class="form-group">

                <label for="phone">
                    Phone Number
                </label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="<?php echo htmlspecialchars($phone); ?>"
                    placeholder="Enter business phone"
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
                    value="<?php echo htmlspecialchars($email); ?>"
                    placeholder="Enter business email"
                >

            </div>


            <div class="form-group">

                <label for="location">
                    Business Location
                </label>

                <textarea
                    id="location"
                    name="location"
                    placeholder="Enter business location"
                ><?php echo htmlspecialchars($location); ?></textarea>

            </div>


            <button
                type="submit"
                class="save-button"
            >
                💾 Save Settings
            </button>


        </form>

    </div>


</div>


</body>

</html>
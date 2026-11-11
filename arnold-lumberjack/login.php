<?php

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    /*
     * Temporary admin credentials.
     * We will replace this with the MySQL database
     * authentication after creating the admin table.
     */

    $admin_username = "admin";
    $admin_password = "Admin@12345";

    if (
        $username === $admin_username &&
        $password === $admin_password
    ) {

        $_SESSION["admin_logged_in"] = true;
        $_SESSION["admin_username"] = $username;

        header("Location: admin/dashboard.php");
        exit;

    } else {

        $error = "Invalid username or password.";

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
          content="Arnold Lumberjack Services administrator login.">

    <title>Admin Login | Arnold Lumberjack Services</title>

    <link rel="stylesheet"
          href="assets/css/style.css">

</head>

<body class="login-page">


<div class="login-wrapper">


    <!-- LOGIN CARD -->

    <div class="login-card">


        <!-- LOGO -->

        <a href="index.php"
           class="login-logo">

            <span class="logo-icon">
                🌲
            </span>

            <span>

                <strong>
                    Arnold
                </strong>

                <small>
                    Lumberjack Services
                </small>

            </span>

        </a>


        <!-- TITLE -->

        <div class="login-heading">

            <h1>
                Admin Login
            </h1>

            <p>
                Sign in to manage your website.
            </p>

        </div>


        <!-- ERROR -->

        <?php if (!empty($error)): ?>

            <div class="login-error">

                <?php echo htmlspecialchars($error); ?>

            </div>

        <?php endif; ?>


        <!-- LOGIN FORM -->

        <form method="POST"
              action="login.php"
              class="login-form">


            <!-- USERNAME -->

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter admin username"
                    autocomplete="username"
                    required
                >

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    autocomplete="current-password"
                    required
                >

            </div>


            <!-- REMEMBER -->

            <div class="login-options">

                <label>

                    <input
                        type="checkbox"
                        name="remember"
                    >

                    Remember me

                </label>

            </div>


            <!-- SUBMIT -->

            <button
                type="submit"
                class="btn btn-primary login-button"
            >

                🔐 Sign In

            </button>


        </form>


        <!-- BACK TO WEBSITE -->

        <div class="login-footer">

            <a href="index.php">
                ← Back to website
            </a>

        </div>


    </div>


</div>


</body>

</html>
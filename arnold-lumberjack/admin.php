<?php

session_start();

/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/

/* If already logged in, go directly to dashboard */
if (
    isset($_SESSION['admin_logged_in']) &&
    $_SESSION['admin_logged_in'] === true
) {
    header("Location: dashboard.php");
    exit;
}


/*
|--------------------------------------------------------------------------
| VARIABLES
|--------------------------------------------------------------------------
*/

$error = "";


/*
|--------------------------------------------------------------------------
| ADMIN LOGIN DETAILS
|--------------------------------------------------------------------------
*/

$admin_username = "admin";
$admin_password = "admin123";


/*
|--------------------------------------------------------------------------
| PROCESS LOGIN
|--------------------------------------------------------------------------
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";


    if (
        $username === $admin_username &&
        $password === $admin_password
    ) {

        /*
        | Create session
        */

        $_SESSION["admin_logged_in"] = true;
        $_SESSION["admin_username"] = $username;


        /*
        | Go to dashboard
        */

        header("Location: dashboard.php");
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

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<meta
    name="description"
    content="Arnold Lumberjack Services administrator login."
>

<title>
    Admin Login | Arnold Lumberjack Services
</title>


<style>

* {
    box-sizing: border-box;
}


body {

    margin: 0;

    min-height: 100vh;

    display: flex;

    align-items: center;

    justify-content: center;

    font-family: Arial, sans-serif;

    background:
        linear-gradient(
            135deg,
            #251b2d,
            #4b354c
        );

    color: #333;

}


/* LOGIN CARD */

.login-card {

    width: 100%;

    max-width: 420px;

    background: white;

    padding: 40px;

    border-radius: 14px;

    box-shadow:
        0 15px 40px rgba(0,0,0,0.25);

}


/* LOGO */

.logo {

    text-align: center;

    font-size: 25px;

    font-weight: bold;

    color: #251b2d;

    margin-bottom: 25px;

}


/* HEADING */

h1 {

    text-align: center;

    margin: 0 0 8px;

    color: #251b2d;

}


.subtitle {

    text-align: center;

    color: #777;

    margin-bottom: 30px;

}


/* ERROR */

.error {

    background: #f8d7da;

    color: #842029;

    padding: 12px;

    border-radius: 7px;

    margin-bottom: 20px;

    text-align: center;

    font-size: 14px;

}


/* FORM */

.form-group {

    margin-bottom: 20px;

}


label {

    display: block;

    margin-bottom: 7px;

    font-weight: bold;

    color: #444;

}


input {

    width: 100%;

    padding: 13px;

    border: 1px solid #ccc;

    border-radius: 7px;

    font-size: 15px;

    outline: none;

}


input:focus {

    border-color: #d58b68;

    box-shadow:
        0 0 0 2px rgba(213,139,104,0.15);

}


/* LOGIN BUTTON */

button {

    width: 100%;

    padding: 14px;

    border: none;

    border-radius: 7px;

    background: #d58b68;

    color: white;

    font-size: 16px;

    font-weight: bold;

    cursor: pointer;

}


button:hover {

    background: #b96e4d;

}


/* BACK LINK */

.back {

    display: block;

    text-align: center;

    margin-top: 22px;

    color: #251b2d;

    text-decoration: none;

    font-size: 14px;

}


.back:hover {

    text-decoration: underline;

}


/* MOBILE */

@media (max-width: 500px) {

    .login-card {

        margin: 20px;

        padding: 30px 25px;

    }

}

</style>

</head>


<body>


<div class="login-card">


    <div class="logo">
        🌲 Arnold Lumberjack
    </div>


    <h1>
        Admin Login
    </h1>


    <p class="subtitle">
        Arnold Lumberjack Services
    </p>


    <?php if (!empty($error)): ?>

        <div class="error">

            <?php
            echo htmlspecialchars($error);
            ?>

        </div>

    <?php endif; ?>


    <form method="POST" action="">


        <div class="form-group">

            <label for="username">
                Username
            </label>

            <input
                type="text"
                id="username"
                name="username"
                placeholder="Enter username"
                autocomplete="username"
                required
            >

        </div>


        <div class="form-group">

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter password"
                autocomplete="current-password"
                required
            >

        </div>


        <button type="submit">

            🔐 Login

        </button>


    </form>


    <a
        href="index.php"
        class="back"
    >
        ← Back to Website
    </a>


</div>


</body>

</html>
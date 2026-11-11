<?php

session_start();

if (
    !isset($_SESSION["admin_logged_in"]) ||
    $_SESSION["admin_logged_in"] !== true
) {
    header("Location: ../login.php");
    exit;
}

require_once "../config/database.php";

$messages = [];

$sql = "SELECT * FROM messages ORDER BY created_at DESC";

$result = $conn->query($sql);

if ($result) {

    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Messages | Arnold Lumberjack Services</title>

    <link rel="stylesheet"
          href="../assets/css/style.css">

</head>

<body>

<header class="admin-header">

    <div class="admin-header-container">

        <a href="dashboard.php" class="admin-logo">
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

            <a href="../logout.php" class="logout-button">
                Logout
            </a>

        </div>

    </div>

</header>


<main class="admin-main">

    <div class="admin-container">

        <div class="admin-title">

            <div>

                <span class="section-label">
                    CUSTOMER COMMUNICATION
                </span>

                <h1>
                    Customer Messages
                </h1>

                <p>
                    Messages sent through your website
                    contact form.
                </p>

            </div>

            <a href="dashboard.php"
               class="btn btn-primary">

                ← Dashboard

            </a>

        </div>


        <div class="admin-stat-card">

            <div class="admin-stat-icon">
                💬
            </div>

            <div>

                <span>
                    Total Messages
                </span>

                <strong>
                    <?php echo count($messages); ?>
                </strong>

            </div>

        </div>


        <section class="admin-section">

            <h2>
                Recent Messages
            </h2>


            <?php if (count($messages) > 0): ?>

                <?php foreach ($messages as $message): ?>

                    <div class="message-card">

                        <div class="message-header">

                            <div>

                                <h3>
                                    <?php
                                    echo htmlspecialchars(
                                        $message["name"]
                                    );
                                    ?>
                                </h3>

                                <p>
                                    <?php
                                    echo htmlspecialchars(
                                        $message["email"]
                                    );
                                    ?>
                                </p>

                            </div>

                            <small>
                                <?php
                                echo htmlspecialchars(
                                    $message["created_at"]
                                );
                                ?>
                            </small>

                        </div>


                        <?php if (!empty($message["phone"])): ?>

                            <p>
                                <strong>Phone:</strong>

                                <?php
                                echo htmlspecialchars(
                                    $message["phone"]
                                );
                                ?>
                            </p>

                        <?php endif; ?>


                        <div class="message-content">

                            <p>

                                <?php
                                echo nl2br(
                                    htmlspecialchars(
                                        $message["message"]
                                    )
                                );
                                ?>

                            </p>

                        </div>


                        <div class="message-actions">

                            <?php if (!empty($message["phone"])): ?>

                                <a
                                    href="tel:<?php
                                    echo htmlspecialchars(
                                        $message["phone"]
                                    );
                                    ?>"
                                    class="btn btn-primary"
                                >
                                    📞 Call Customer
                                </a>

                            <?php endif; ?>


                            <a
                                href="mailto:<?php
                                echo htmlspecialchars(
                                    $message["email"]
                                );
                                ?>"
                                class="btn btn-secondary"
                            >
                                ✉️ Reply
                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>


            <?php else: ?>

                <div class="empty-table">

                    <div class="empty-icon">
                        💬
                    </div>

                    <h3>
                        No Messages Yet
                    </h3>

                    <p>
                        Customer messages will appear
                        here when they contact you.
                    </p>

                </div>

            <?php endif; ?>

        </section>

    </div>

</main>


<footer class="admin-footer">

    <p>
        © 2026 Arnold Lumberjack Services.
        Admin Panel.
    </p>

</footer>

</body>

</html>
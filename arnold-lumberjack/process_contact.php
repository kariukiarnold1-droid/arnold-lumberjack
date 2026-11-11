<?php

require_once __DIR__ . "/config/database.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request.");
}

$name = trim($_POST["name"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$email = trim($_POST["email"] ?? "");
$service = trim($_POST["service"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $phone === "" || $service === "" || $message === "") {
    die("Please fill in all required fields.");
}

$sql = "INSERT INTO messages 
        (name, phone, email, service, message)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Database error: " . $conn->error);
}

$stmt->bind_param(
    "sssss",
    $name,
    $phone,
    $email,
    $service,
    $message
);

if ($stmt->execute()) {

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Request Sent | Arnold Lumberjack Services</title>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;

            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
        }

        .success-box {
            background: white;

            width: 90%;
            max-width: 550px;

            padding: 45px;

            text-align: center;

            border-radius: 12px;

            box-shadow:
                0 10px 30px rgba(0,0,0,0.12);
        }

        .success-icon {
            font-size: 60px;
            margin-bottom: 15px;
        }

        h1 {
            color: #24342b;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;

            margin-top: 20px;

            padding: 13px 25px;

            background: #d99b36;

            color: white;

            text-decoration: none;

            border-radius: 6px;

            font-weight: bold;
        }

        .btn:hover {
            background: #b77d25;
        }

    </style>

</head>

<body>

    <div class="success-box">

        <div class="success-icon">
            ✅
        </div>

        <h1>
            Request Sent Successfully!
        </h1>

        <p>
            Thank you,
            <?php echo htmlspecialchars($name); ?>.
            We have received your request and will
            contact you soon.
        </p>

        <a href="index.php" class="btn">
            Back to Home
        </a>

    </div>

</body>

</html>

<?php

} else {

    die("Unable to save your request: " . $stmt->error);

}

$stmt->close();
$conn->close();

?>
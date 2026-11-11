<?php

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}

require_once "db.php";

if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $stmt->close();
}

header("Location: dashboard.php");
exit();

?>
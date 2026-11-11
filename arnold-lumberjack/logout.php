<?php

session_start();

/*
    Clear all session variables
*/
$_SESSION = [];

/*
    Destroy the admin session
*/
session_destroy();

/*
    Send the admin back to the login page
*/
header("Location: admin.php");
exit();

?>
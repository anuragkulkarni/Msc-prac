<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: login.php');
    exit();
}

echo "Welcome, " . $_SESSION['name'] . "!";
?>

<br><a href="logout.php">Logout</a>

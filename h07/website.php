<?php
session_start();
if (isset ($_SESSION["user"])) {
    echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " op de website";
    echo "<p><a href='Login.php'>website</a></p>";
} else {
    header('location:Login.php');
}
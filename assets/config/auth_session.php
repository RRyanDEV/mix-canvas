<?php
    session_start();
    if(!isset($_SESSION["email"])) {
        header("Location: ../pages/dashboard.php");
        exit();
    }
?>
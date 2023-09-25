<?php
include_once('../assets/config/config.php');
session_start();
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conexao, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conexao, $password);
    // Check user is exist in the database
    $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . ($password) . "'";
    $result = mysqli_query($conexao, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = mysqli_fetch_array($result)[1];
        // Redirect to user dashboard page
        header("Location: dashboard.php");
    } else {
        header("Location: error.php");
    }
}

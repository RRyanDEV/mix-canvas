<?php
include_once('../assets/config/config.php');
session_start();
if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conexao, $email);
    $password = stripslashes($_REQUEST['password']);
    $result = checkCredentials(false, $email, $password, $conexao);
    $resultHashed = checkCredentials(true, $email, $password, $conexao);
    if ($result) {
        $_SESSION['username'] = $result;
        // Redirect to user dashboard page
        header("Location: dashboard.php");
    } else if($resultHashed) {
        $_SESSION['username'] = $resultHashed;
        header("Location: dashboard.php");
    } else{
        header("Location: error.php");
    }
};

function checkCredentials($hashed, $email, $password, $conexao)
{
    $verifiedPassword = $hashed ? md5($password) : $password;
    $query    = "SELECT * FROM `users` WHERE email='$email' AND password='" . ($verifiedPassword) . "'";
    $result = mysqli_query($conexao, $query);
    $rows = mysqli_num_rows($result);
    if($rows == 1){
        return mysqli_fetch_array($result)[1];
    } else{
        return false;
    }
}

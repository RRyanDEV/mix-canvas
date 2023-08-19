<?php
include("../assets/config/auth_session.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ryan Gomes" />
    <meta name="keywords" content="PHP, MySQL, HTML, SASS" />
    <title>Model Canvas - Dashboard</title>
    <!-- Link's -->
    <link rel="stylesheet" href="../assets/scss/main.css">
    <link rel="icon" href="../assets/img/site-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</head>

<body>
    <nav>
        <div class="navback">
            <div class="userinfo">
                <div id="usericon" onclick="myFunction()">
                    <img class="userimg" src="../assets/img/user-icon.png">
                </div>
                <div id="usertext">
                    <p>Olá, <?php echo $_SESSION['email']; ?></p>
                </div>
            </div>
            <div class="logoutButton">
                <p><a href="../assets/config/logout.php">Sair</a></p>
            </div>
        </div>
    </nav>
</body>

</html>
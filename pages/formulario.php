<?php
include_once('../assets/config/config.php');
session_start();
// if (isset($_POST['submit'])) {
//     echo ($_POST['nome']);
//     echo ('<br>');
//     echo ($_POST['email']);
//     echo ('<br>');
// };


/*
// Condição para verificar se o email já foi usado.
if (isset($_POST['submit'])) {
    $postemail = (string)$_POST['email'];
    $result = mysqli_query(
        $GLOBALS['conexao'],
        "SELECT user_email FROM users WHERE user_email='$postemail'"
    );
    $result = (mysqli_fetch_array($result));
    if (empty($result)) {
        $_SESSION['nome'] = (string)$_POST['nome'];
        $_SESSION['email'] = $postemail;
    } else {
        echo ("<script>alert('Usuário já preencheu esse formulário!')</script>");
        echo ("<script>location.href='../index.php'</script>");
    };
};
*/

/* 
// Condição que envia os valores para o banco de dados.
$formnome = $_SESSION['nome'];
$formemail = $_SESSION['email'];

mysqli_query(
    $GLOBALS['conexao'],
    "INSERT INTO users(username,user_email)
VALUES ('$formnome', '$formemail')
"
);
*/



?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PHP, MySQL, HTML, SASS" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/scss/main.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="container_md">
            
        </div>
    </main>




























</body>

</html>
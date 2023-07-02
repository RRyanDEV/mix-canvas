<?php
include_once('./assets/config/config.php');
session_start();

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
            <div class="box_md">
                <h1>Informações de Usuário</h1>
                <div class="formUser">
                    <form action="/pages/formulario.php" method="POST">
                        <div class="box_input">
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inputUser" required>
                        </div>
                        <br>
                        <div class="box_input">
                            <input type="text" name="email" id="email" placeholder="Digite seu Email" class="inputUser" required>
                        </div>
                </div>
                <input class="btn" type="submit" name="login" value="Enviar">
            </div>
        </div>
    </main>
</body>

</html>
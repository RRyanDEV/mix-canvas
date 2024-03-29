<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="../assets/scss/main.css">
    <link rel="icon" href="../assets/img/site-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>Registrar</title>
</head>



<body>
    <?php
    require('../assets/config/config.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conexao, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conexao, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conexao, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($conexao, $query);
        if ($result) {
            header("Location: success.php");
        } else{
            header("Location: failure.php");
        }
    }
    ?>
    <form class="form" action="" method="post">
        <div class="containerLogin">
            <div class="register">
                <div class="headerLoginBox">
                    <div class="fas fa-user-circle"></div>
                    <b class="loginTitle_register">Criar Conta</b>
                </div>
                <div class="form">
                    <div class="form-row">
                        <i class="fas fa-user"></i>
                        <label class="form-label" for="username">Nome</label>
                        <input type="text" class="form-text" name="username" placeholder="Digite seu Nome" required>
                    </div>
                    <div class="form-row">
                        <i class="fas fa-envelope"></i>
                        <label class="form-label" for="user_email">E-mail</label>
                        <input type="text" class="form-text" name="email" placeholder="Digite seu Email" required>
                    </div>
                    <div class="form-row">
                        <i class="fas fa-eye" id="togglePasswordR" style="margin-left: -30px; cursor: pointer;"></i>
                        <label class="form-label" for="password">Senha</label>
                        <input type="password" class="form-text" name="password" placeholder="Digite sua Senha" required id="id_passwordR">
                        <div class="buttons-login">
                            <div class="form-row button-login">
                                <input class="btn btn-login" type="submit" name="submit" value="Criar Conta" class="login-button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</body>
<script>
    // Hide/Show password
    const togglePasswordRegister = document.querySelector('#togglePasswordR');
    const passwordRegister = document.querySelector('#id_passwordR');

    togglePasswordRegister.addEventListener('click', function(e) {
        const type = passwordRegister.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordRegister.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>
<!DOCTYPE html>
<html>

<head>
    <!-- Property -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ryan Gomes" />
    <meta name="keywords" content="PHP, MySQL, HTML, SASS" />
    <!-- Link's -->
    <link rel="stylesheet" href="../assets/scss/main.css">
    <link rel="icon" href="../assets/img/site-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <title>Login - Model Canvas</title>
</head>

<body>
    <?php
    require('../assets/config/config.php');
    session_start();

    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conexao, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conexao, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conexao, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<section class='containerLogin'>
            <div class='login'>
                <h1>Nome de usuário/senha incorretos.</h1>
                <br>
                <p class='link'>Clique aqui para <a href='login.php'>Entrar</a> novamente.</p>
            </div>";
        }
    } else {

    ?>
        <form class="form" method="post" name="login">
            <section class="containerLogin">
                <div class="login">
                    <i class="fas fa-sign-in-alt"></i>
                    <strong>Bem Vindo!</strong>
                    <span>Entre com sua conta</span>

                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <i class="fas fa-user"></i>
                                <label class="form-label" for="emailLogin">Email</label>
                                <input type="text" class="form-text" name="email" placeholder="Digite seu Email" autofocus="true" />
                            </div>
                            <div class="form-row">
                                <i class="fas fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                                <label class="form-label" for="senhaLogin">Senha</label>
                                <input type="password" id="id_password" class="form-text" required name="password" placeholder="Digite sua Senha" />
                            </div>
                        </div>
                        <div class="buttons-login">
                            <div class="form-row button-login">
                                <input type="submit" value="Entrar" name="submit" class="btn btn-login" />
                            </div>
                            <p class="btn btn-register" class="link"><a href="register.php">Criar Conta</a></p>
                        </div>
                </div>
                </fieldset>
                </div>
            </section>
        </form>
    <?php
    } ?>
</body>
<script>
    // Hide/Show password
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');
    togglePassword.addEventListener('click', function(e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });
</script>

</html>
<?php
include_once('./assets/config/config.php');
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

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
    <link rel="icon" href="./assets/img/site-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <title>Model Canvas</title>
</head>

<body>
    <main>
        <section class="containerLogin">
            <!-- login -->
            <div class="login">

                <i class="fas fa-sign-in-alt"></i>
                <strong>Bem Vindo!</strong>
                <span>Entre com sua conta</span>

                <form>
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <i class="fas fa-user"></i>
                                <label class="form-label" for="emailLogin">Email</label>
                                <input type="text" class="form-text" id="emailLogin" placeholder="Digite seu email">
                            </div>
                            <div class="form-row">
                                <i class="fas fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                                <label class="form-label" for="senhaLogin">Senha</label>
                                <input type="password" name="password" autocomplete="current-password" class="form-text" required id="id_password" placeholder="Digite sua senha">
                            </div>
                            <div class="form-row bottom">
                                <div class="form-check">
                                    <input type="checkbox" id="lembrese" name="lembrese" value="lembrese">
                                    <label for="lembrese">Lembrar Usuário</label>
                                </div>
                                <a href class="forgot">Esqueceu a senha?</a>
                            </div>
                            <div class="buttons-login">
                                <div class="form-row button-login">
                                    <button class="btn btn-login">Entrar<i class="fas fa-arrow-right"></i></button>
                                </div>
                                <div class="form-row button-login">
                                    <a href="#ex1" rel="modal:open">
                                        <button class="btn btn-register" type="submit" name="register">Criar
                                            Conta <i class="fas fa-arrow-right"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

            <!-- Register -->
            <div id="ex1" class="modal">
                <div class="register">
                    <i class="fas fa-user-circle"></i>
                    <strong>Criar Conta!</strong>
                    <form>
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <i class="fas fa-user"></i>
                                    <label class="form-label" for="nomeCadastro">Nome</label>
                                    <input type="text" class="form-text" id="nomeCadastro" placeholder="Digite seu nome">
                                </div>
                                <div class="form-row">
                                    <i class="fas fa-envelope"></i>
                                    <label class="form-label" for="emailCadastro">E-mail</label>
                                    <input type="text" class="form-text" id="emailCadastro" placeholder="Digite seu email">
                                </div>
                                <div class="form-row">
                                    <i class="fas fa-eye" id="togglePasswordR" style="margin-left: -30px; cursor: pointer;"></i>
                                    <label class="form-label" for="senhaCadastro">Senha</label>
                                    <input type="password" name="password" autocomplete="current-password" class="form-text" required id="id_passwordR" placeholder="Digite sua senha">
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login" type="submit" name="login">Criar
                                        Conta <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script>
        // Login
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        // Register
        const togglePasswordRegister = document.querySelector('#togglePasswordR');
        const passwordRegister = document.querySelector('#id_passwordR');

        togglePasswordRegister.addEventListener('click', function(e) {
            const type = passwordRegister.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordRegister.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
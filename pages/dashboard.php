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

<body class="colorBG">
    <nav>
        <div class="navback">
            <div class="userinfo">
                <div id="usericon">
                    <img class="userimg" src="../assets/img/user-icon.png">
                </div>
                <div id="usertext">
                    <p>Olá, <?php echo $_SESSION['email']; ?></p>
                </div>
            </div>
            <div class="buttons">
                <div class="sendButton">
                    <p><a href="">Enviar</a></p>
                </div>
                <div class="logoutButton">
                    <p><a href="../assets/config/logout.php">Sair</a></p>
                </div>
            </div>
    </nav>

    <main>
        <div class="dashboardContainer">
            <div class="parent">
                <div class="card">
                    <div id="cardTitle">Recurso Chave</div>
                    <div id="cardSubtitle">
                        São as empresas ou organizações que ajudam a empresa a criar valor para o cliente.
                    </div>
                </div>

                <div class="card_green">
                    <div id="cardTitle" class="mt">Proposta de Valor</div>
                    <div id="cardSubtitle" class="mb">
                        É o valor que o produto/serviço oferece para o cliente.
                    </div>
                </div>

                <div class="card_aquamarine">
                    <div id="cardTitle" class="mt">Segmento de Cliente</div>
                    <div id="cardSubtitle" class="mb">
                        São os grupos de clientes que a empresa pretende atender.
                    </div>
                </div>

                <div class="card_olive">
                    <div id="cardTitle">Parceiros Chave</div>
                    <div id="cardSubtitle">
                        São as empresas ou organizações que ajudam a empresa a criar valor para o cliente.
                    </div>
                </div>

                <div class="card_yellow">
                    <div id="cardTitle">Problemas</div>
                    <div id="cardSubtitle">
                        São as necessidades ou desafios enfrentados pelo cliente que a empresa se propõe a solucionar.
                    </div>
                </div>

                <div class="card_red">
                    <div id="cardTitle">Solução</div>
                    <div id="cardSubtitle">
                        É o produto/serviço oferecido pela empresa para resolver os problemas do cliente.
                    </div>
                </div>

                <div class="card_emerald">
                    <div id="cardTitle" class="mt">Relacionamento com cliente</div>
                    <div id="cardSubtitle" class="mb">
                        É a forma como a empresa se relaciona com o cliente.
                    </div>
                </div>

                <div class="card_rose">
                    <div id="cardTitle" class="mt">Atividades Chaves</div>
                    <div id="cardSubtitle" class="mb">
                        São as atividades essenciais para a operação do negócio.
                    </div>
                </div>

                <div class="card_orange">
                    <div id="cardTitle">Métricas Chave</div>
                    <div id="cardSubtitle">
                        São as métricas utilizadas para mensurar o desempenho do negócio.
                    </div>
                </div>

                <div class="card_jade">
                    <div id="cardTitle">Canais de distribuição</div>
                    <div id="cardSubtitle">
                        São os canais pelos quais a empresa se comunica e entrega seu produto/serviço ao cliente.
                    </div>
                </div>

                <div class="card_lightblue">
                    <div id="cardTitle" class="mt">Estrutura de custo</div>
                    <div id="cardSubtitle" class="mb">
                        São os custos envolvidos na operação do negócio.
                    </div>
                </div>

                <div class="card_lawngreen">
                    <div id="cardTitle" class="mt">Vantagem competitiva</div>
                    <div id="cardSubtitle" class="mb">
                        É o que diferencia o negócio dos seus concorrentes.
                    </div>
                </div>

            </div> <!--- Div Grid --->
            <div class="cardBottom">
                <div class="card_gray">
                    <div id="cardTitle" class="mt">Fonte de receita</div>
                    <div id="cardSubtitle" class="mb">
                        É como a empresa ganha dinheiro.
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
</body>

</html>
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
    <link rel="stylesheet" href="assets/scss/main.css">
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
                <input class="btn" type="submit" name="submit" value="Enviar">
            </div>
        </div>
        <!-- <div class="cont-models">
        <div class="models">
            <div class="cardmodel">
                <div class="card">Recursos Chave*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card2">Parceiros Chave*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card3">Atividades Chave*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card4">Estrutura de Custo*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="models">
            <div class="cardmodel">
                <div class="card5">Proposta de valor*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardside">
                <div class="cardmodel">
                    <div class="card6">Proposta de valor*</div>
                    <div class="model">
                        <div class="input">
                            <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="cardmodel">
                    <div class="card7">Solução*</div>
                    <div class="model">
                        <div class="input">
                            <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card8">Métricas Chave*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card9">Vantagem competitiva*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="models">
            <div class="cardmodel">
                <div class="card10">Segmento de clientes*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card11">Relacionamento com o cliente*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card12">Canais de distribuição*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="cardmodel">
                <div class="card13">Fonte de receita*</div>
                <div class="model">
                    <div class="input">
                        <textarea id="" rows="4" cols="50" placeholder="Sua Resposta" class="" required></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </main>
</body>

</html>
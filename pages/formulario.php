<?php
include_once('../assets/config/config.php');
session_start();

// Array, onde fica as informações de cada formulário.
$componentArray = [
    '0' => [
        'name' => 'recursochave', 'color' =>  'blue', 'title' => 'Recurso Chave', 'subtitle1' => 'São os ativos necessários para a operação do negócio.', 'subtitle2' =>  'Exemplo: equipamentos, tecnologia, pessoas, capital, etc.', 'btnPrevious' => '', 'btnReturn' => 'returnButton'
    ],
    '1' => [
        'name' => 'propostavalor', 'color' =>  'green', 'title' => 'Proposta de Valor', 'subtitle1' => 'É o valor que o produto/serviço oferece para o cliente.', 'subtitle2' =>  'Exemplo: inovação, qualidade, conveniência, etc.', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '2' => [
        'name' => 'segmentocliente', 'color' =>  'aquamarine', 'title' => 'Segmento de clientes', 'subtitle1' => 'São os grupos de clientes que a empresa pretende atender.', 'subtitle2' =>  'Exemplo: jovens, idosos, empresas, etc.', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '3' => [
        'name' => 'parceiroschave', 'color' =>  'olive', 'title' => 'Parceiros chave', 'subtitle1' => 'São as empresas ou organizações que ajudam a empresa a criar valor para o cliente.', 'subtitle2' =>  'Exemplo: fornecedores, distribuidores, parceiros de marketing, etc.', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '4' => [
        'name' => 'problemas', 'color' =>  'yellow', 'title' => 'Problemas', 'subtitle1' => 'São as necessidades ou desafios enfrentados pelo cliente que a empresa se propõe a solucionar.', 'subtitle2' =>  'Exemplo: falta de tempo, falta de acesso a produtos/serviços, dificuldades financeiras, etc.
', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '5' => [
        'name' => 'solucao', 'color' =>  'red', 'title' => 'Solução', 'subtitle1' => 'É o produto/serviço oferecido pela empresa para resolver os problemas do cliente.', 'subtitle2' =>  'Exemplo: aplicativo de delivery de comida, serviço de consultoria financeira, produto inovador, etc.
',  'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '6' => [
        'name' => 'relacaocliente', 'color' =>  'emerald', 'title' => 'Relacionamento com cliente', 'subtitle1' => ' É a forma como a empresa se relaciona com o cliente.', 'subtitle2' =>  'Exemplo: atendimento personalizado, suporte técnico, comunicação eficiente, etc.
', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '7' => [
        'name' => 'atividadeschave', 'color' =>  'rose', 'title' => 'Atividades Chaves', 'subtitle1' => 'São as atividades essenciais para a operação do negócio.', 'subtitle2' =>  'Exemplo: produção, marketing, vendas, atendimento, etc.
', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '8' => [
        'name' => 'metricas', 'color' =>  'orange', 'title' => 'Métricas chave', 'subtitle1' => 'São as métricas utilizadas para mensurar o desempenho do negócio.', 'subtitle2' =>  'Exemplo: número de clientes, faturamento, custos, taxa de conversão, etc.
',  'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '9' => [
        'name' => 'canaisdistribuicao', 'color' =>  'jade', 'title' => 'Canais de distribuição', 'subtitle1' => 'São os canais pelos quais a empresa se comunica e entrega seu produto/serviço ao cliente.', 'subtitle2' =>  'Exemplo: loja física, e-commerce, aplicativo, redes sociais, etc.
',  'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '10' => [
        'name' => 'estruturacusto', 'color' =>  'lightblue', 'title' => 'Estrutura de custo', 'subtitle1' => 'São os custos envolvidos na operação do negócio.', 'subtitle2' =>  'Exemplo: custo de produção, marketing, logística, pessoal, etc.
',  'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton'
    ],
    '11' => [
        'name' => 'vantagemcompetitiva', 'color' =>  'lawngreen', 'title' => 'Vantagem competitiva', 'subtitle1' => 'É o que diferencia o negócio dos seus concorrentes.', 'subtitle2' =>  'Exemplo: preço, qualidade, inovação, atendimento, etc.', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton '
    ],
    '12' => ['name' => 'fontereceita', 'color' =>  'gray', 'title' => 'Fonte de receita', 'subtitle1' => 'É como a empresa ganha dinheiro.', 'subtitle2' =>  'Exemplo: venda de produtos/serviços, aluguel de espaço, publicidade,comissões,etc.
', 'btnPrevious' => 'arrow_left', 'btnReturn' => 'returnButton']
];
global $componentArray;
//

// Função que cria o formulário.
function formComponent($name, $color, $title, $subtitle1, $subtitle2, $btnPrevious, $btnReturn)
{
    $displayBtnPrevious = ($btnPrevious == "") ? ('style="display:none"') : ('');
    $displayBtnReturn = ($btnReturn == "") ? ('style="display:none"') : ('');
    return '<form action="" class="form" method="POST">
<div class="container_g">
    <div class="container_mdf">
        <div class="cont-model">
            <div class="card_side_left_' . $color . '">
                <div class="card_text">
                    <div id="title_text">
                        <h2>' . $title . '</h2>
                    </div>
                    <div id="subtitle_text">
                        <p align="center">' . $subtitle1 . '</p>
                        <p align="center">' . $subtitle2 . '</p>
                    </div>
                </div>
            </div>
            <div class="card_side_right">
                <div class="input">
                    <textarea id="txt" maxlength="1000" onchange="" name="' . $name . '" cols="100" placeholder="Digite aqui sua resposta" required></textarea>
                    <p id="letter_count"></p>
                </div>
                <div class="' . $btnReturn . '">
                <div class="buttonsFormsExit" ' . $displayBtnReturn . '>
                <button class="buttonForm" type="submit" name="submit">Salvar e sair</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</form>';
}
//

// Função que percorre o array, para informar em qual estágio do formulário está.
function createComponent($arrayIndex)
{
    $componentProps = array_values($GLOBALS['componentArray'][$arrayIndex]);
    return formComponent(...$componentProps);
}
//

$doc = new DOMDocument();

if (!isset($_SESSION['textValue'])) {
    $_SESSION['textValue'] = "";
}

if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 0;
}

$_SESSION['step'] = $_GET['step'];

if (!isset($_GET['step'])) {
    $_SESSION['step'] = 0;
}

if (!isset($_SESSION[$componentArray[$_SESSION['step']]['title']])) {
    $_SESSION[$componentArray[$_SESSION['step']]['title']] = "";
}

$_SESSION['textValue'] = $_SESSION[$componentArray[$_SESSION['step']]['title']];

if (isset($_POST['submit'])) {
    $userid = $_SESSION['userID'];
    $step = $_SESSION['step'];
    $pergunta = $GLOBALS['componentArray'][(int)$step]['title'];
    $respostaForm =  $_POST[$GLOBALS['componentArray'][(int)$step]['name']];
    if (strlen($_SESSION[$pergunta]) > 0) {
        mysqli_query(
            $GLOBALS['conexao'],
            "UPDATE blocos SET resposta='$respostaForm' WHERE id_user='$userid' and pergunta='$pergunta'  "
        );
    } else {
        mysqli_query(
            $GLOBALS['conexao'],
            "INSERT INTO blocos(id_user,pergunta,resposta) 
                VALUES ($userid , '$pergunta', '$respostaForm')"
        );
    }
    header("Location: ./dashboard.php");
}

$doc->loadHTML('<?xml encoding="utf-8" ?>' . '<link rel="icon" href="../assets/img/site-logo.png" />' . createComponent($_SESSION['step']));

$element = $doc->getElementById("txt");
if ($element !== null) {
    $element->textContent = $_SESSION['textValue'];
}

echo $doc->saveHTML();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="PHP, MySQL, HTML, SASS" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/scss/main.css">
    <link rel="icon" href="../assets/img/site-logo.png" />
    <title>Questionário</title>
</head>

<body>
    <?php

    ?>
    <script type="text/javascript">
        function goToDash() {
            window.location = "./dashboard.php"
        }

        jQuery(document).on('keyup', 'textarea', updateCount);
        jQuery(document).on('keydown', 'textarea', updateCount);

        function updateCount() {
            let cs = jQuery(this).val().length;
            const max = `restam ${1000 - cs} caracteres`;
            jQuery('#letter_count').text(max);
        }
    </script>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
</body>

</html>
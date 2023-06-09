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
$componentArray = [
    '0' => [
        'name' => 'recursochave', 'color' =>  'blue', 'title' => 'Recurso Chave', 'subtitle1' => 'São os ativos necessários para a operação do negócio.', 'subtitle2' =>  'Exemplo: equipamentos, tecnologia, pessoas, capital, etc.', 'btnPrevious' => ''
    ],
    '1' => [
        'name' => 'propostavalor', 'color' =>  'green', 'title' => 'Proposta de Valor', 'subtitle1' => 'É o valor que o produto/serviço oferece para o cliente.', 'subtitle2' =>  'Exemplo: inovação, qualidade, conveniência, etc.', 'btnPrevious' => 'arrow_left'
    ],
    '2' => [
        'name' => 'segmentocliente', 'color' =>  'aquamarine', 'title' => 'Segmento de clientes', 'subtitle1' => 'São os grupos de clientes que a empresa pretende atender.', 'subtitle2' =>  'Exemplo: jovens, idosos, empresas, etc.', 'btnPrevious' => 'arrow_left'
    ],
    '3' => [
        'name' => 'parceiroschave', 'color' =>  'olive', 'title' => 'Parceiros chave', 'subtitle1' => 'São as empresas ou organizações que ajudam a empresa a criar valor para o cliente.', 'subtitle2' =>  'Exemplo: fornecedores, distribuidores, parceiros de marketing, etc.', 'btnPrevious' => 'arrow_left'
    ],
    '4' => [
        'name' => 'problemas', 'color' =>  'yellow', 'title' => 'Problemas', 'subtitle1' => 'São as necessidades ou desafios enfrentados pelo cliente que a empresa se propõe a solucionar.', 'subtitle2' =>  'Exemplo: falta de tempo, falta de acesso a produtos/serviços, dificuldades financeiras, etc.
', 'btnPrevious' => 'arrow_left'
    ],
    '5' => [
        'name' => 'solucao', 'color' =>  'red', 'title' => 'Solução', 'subtitle1' => 'É o produto/serviço oferecido pela empresa para resolver os problemas do cliente.', 'subtitle2' =>  'Exemplo: aplicativo de delivery de comida, serviço de consultoria financeira, produto inovador, etc.
',  'btnPrevious' => 'arrow_left'
    ],
    '6' => [
        'name' => 'relacaocliente', 'color' =>  'emerald', 'title' => 'Relacionamento com cliente', 'subtitle1' => ' É a forma como a empresa se relaciona com o cliente.', 'subtitle2' =>  'Exemplo: atendimento personalizado, suporte técnico, comunicação eficiente, etc.
', 'btnPrevious' => 'arrow_left'
    ],
    '7' => [
        'name' => 'atividadeschave', 'color' =>  'rose', 'title' => 'Atividades Chaves', 'subtitle1' => 'São as atividades essenciais para a operação do negócio.', 'subtitle2' =>  'Exemplo: produção, marketing, vendas, atendimento, etc.
', 'btnPrevious' => 'arrow_left'
    ],
    '8' => [
        'name' => 'metricas', 'color' =>  'orange', 'title' => 'Métricas chave', 'subtitle1' => 'São as métricas utilizadas para mensurar o desempenho do negócio.', 'subtitle2' =>  'Exemplo: número de clientes, faturamento, custos, taxa de conversão, etc.
',  'btnPrevious' => 'arrow_left'
    ],
    '9' => [
        'name' => 'canaisdistribuicao', 'color' =>  'jade', 'title' => 'Canais de distribuição', 'subtitle1' => 'São os canais pelos quais a empresa se comunica e entrega seu produto/serviço ao cliente.', 'subtitle2' =>  'Exemplo: loja física, e-commerce, aplicativo, redes sociais, etc.
',  'btnPrevious' => 'arrow_left'
    ],
    '10' => [
        'name' => 'estruturacusto', 'color' =>  'lightblue', 'title' => 'Estrutura de custo', 'subtitle1' => 'São os custos envolvidos na operação do negócio.', 'subtitle2' =>  'Exemplo: custo de produção, marketing, logística, pessoal, etc.
',  'btnPrevious' => 'arrow_left'
    ],
    '11' => [
        'name' => 'vantagemcompetitiva', 'color' =>  'lawngreen', 'title' => 'Vantagem competitiva', 'subtitle1' => 'É o que diferencia o negócio dos seus concorrentes.', 'subtitle2' =>  'Exemplo: preço, qualidade, inovação, atendimento, etc.', 'btnPrevious' => 'arrow_left'
    ],
    '12' => ['name' => 'fontereceita', 'color' =>  'gray', 'title' => 'Fonte de receita', 'subtitle1' => 'É como a empresa ganha dinheiro.', 'subtitle2' =>  'Exemplo: venda de produtos/serviços, aluguel de espaço, publicidade,comissões,etc.
', 'btnPrevious' => 'arrow_left']
];

global $componentArray;
function formComponent($name, $color, $title, $subtitle1, $subtitle2, $btnPrevious)
{
    $displayBtnPrevious = ($btnPrevious == "") ? ('style="display:none"') : ('');
    return '<form action="" class="form" method="POST">
<div class="container_g">
    <div class="' . $btnPrevious . '">
    <input type="text" name="backToStep" value="' . $_SESSION['step'] . '" ' . ' style="display:none">
    <input type="submit" name="back" value="" ' . $displayBtnPrevious . '>
    </div>
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
            </div>
        </div>
    </div>
    <div class="arrow">
        <input type="submit" name="submit" value="">
    </div>
</div>
</form>';
}
function createComponent($arrayIndex)
{
    if ((int)$arrayIndex == 13) {
        return '<div class="endparent">
        <div class="TitleEnd">
                <h2>Formulário enviado com sucesso!</h2><div></div>';
    } else {
        $componentProps = array_values($GLOBALS['componentArray'][$arrayIndex]);
        return formComponent(...$componentProps);
    }
}

if (isset($_POST['submit'])) {
    $postEntry = $GLOBALS['componentArray'][$_SESSION['step']]['name'];
    if (isset($_POST[$postEntry])) {
        $_SESSION[$postEntry] = (string)$_POST[$postEntry];
    }
}

$doc = new DOMDocument();

$textValue = " ";
global $textValue;

if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 0;
}

if (isset($_POST['back'])) {
    $nextStep = (int)$_SESSION['step']+1;
    $postEntry = $GLOBALS['componentArray'][$nextStep]['name'];
    if (isset($_POST[$postEntry])) {
        $GLOBALS['textValue'] = (string)$_POST[$postEntry];
    }
    if ((isset($_POST['backToStep'])) && (int)$_POST['backToStep'] > 1) {
        $_SESSION['backToStep'] = (int)$_POST['backToStep'] - 1;
    } else {
        $_SESSION['backToStep'] = 0;
    }
    $_SESSION['step'] = $_SESSION['backToStep'];
}
if (isset($_SESSION['backToStep'])) {
    // echo 'BUCETA DE ECHO'. $_SESSION['backToStep'];
    switch (true) {
        case $_SESSION['backToStep'] == 0:
            $GLOBALS['textValue'] = $_SESSION['recursochave'];
            break;
        case $_SESSION['backToStep'] == 1:
            $GLOBALS['textValue'] = $_SESSION['propostavalor'];
            break;
        case $_SESSION['backToStep'] == 2:
            $GLOBALS['textValue'] = $_SESSION['segmentocliente'];
            break;
        case $_SESSION['backToStep'] == 3:
            $GLOBALS['textValue'] = $_SESSION['parceiroschave'];
            break;
        case $_SESSION['backToStep'] == 4:
            $GLOBALS['textValue'] = $_SESSION['problemas'];
            break;
        case $_SESSION['backToStep'] == 5:
            $GLOBALS['textValue'] = $_SESSION['solucao'];
            break;
        case $_SESSION['backToStep'] == 6:
            $GLOBALS['textValue'] = $_SESSION['relacaocliente'];
            break;
        case $_SESSION['backToStep'] == 7:
            $GLOBALS['textValue'] = $_SESSION['atividadeschave'];
            break;
        case $_SESSION['backToStep'] == 8:
            $GLOBALS['textValue'] = $_SESSION['metricas'];
            break;
        case $_SESSION['backToStep'] == 9:
            $GLOBALS['textValue'] = $_SESSION['canaisdistribuicao'];
            break;
        case $_SESSION['backToStep'] == 10:
            $GLOBALS['textValue'] = $_SESSION['estruturacusto'];
            break;
        case $_SESSION['backToStep'] == 11:
            $GLOBALS['textValue'] = $_SESSION['vantagemcompetitiva'];
            break;
        case $_SESSION['backToStep'] == 12:
            $GLOBALS['textValue'] = $_SESSION['fontereceita'];
            break;
        default:
            $GLOBALS['textValue'] = "";
            break;
    };
    // echo "TextValue " . $GLOBALS['textValue'];
}

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['submit'])) {
    $_SESSION['step']++;
    $nextStep = (int)$_SESSION['step']+1;
    $postEntry = $GLOBALS['componentArray'][$nextStep]['name'];
    // echo 'ShERECA ' . $postEntry;
    if (isset($_POST[$postEntry])) {
        $GLOBALS['textValue'] = (string)$_POST[$postEntry];
    }
    // echo "Step: " . $_SESSION['step'];
}

$doc->loadHTML('<?xml encoding="utf-8" ?>' . createComponent($_SESSION['step']));

$doc->getElementById('txt')->textContent = $GLOBALS['textValue'];

echo $doc->saveHTML();

// session_destroy();
function finishForm()
{














    mysqli_close($GLOBALS['conexao']);
}
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
    <title>Document</title>
</head>

<body>
    <script type="text/javascript">
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
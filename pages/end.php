<?php
include_once('../assets/config/config.php');
session_start();


if (isset($_POST['submit'])) {
    $_SESSION['recursochave']  = (string)$_POST['recurso'];
    $_SESSION['propostavalor']  = (string)$_POST['proposta'];
    $_SESSION['segmentocliente']  = (string)$_POST['segmento'];
    $_SESSION['parceiroschave']  = (string)$_POST['parceiros'];
    $_SESSION['problemas']  = (string)$_POST['problems'];
    $_SESSION['solucao']  = (string)$_POST['solutions'];
    $_SESSION['relacaocliente']  = (string)$_POST['relacao'];
    $_SESSION['atividadeschave']  = (string)$_POST['atividade'];
    $_SESSION['metricas']  = (string)$_POST['metrica'];
    $_SESSION['canaisdistribuicao']  = (string)$_POST['canais'];
    $_SESSION['estruturacusto']  = (string)$_POST['estrutura'];
    $_SESSION['vantagemcompetitiva']  = (string)$_POST['vantagens'];
    $_SESSION['fontereceita']  = (string)$_POST['fonte'];
}

mysqli_close($conexao);
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
    </main>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
</body>

</html>
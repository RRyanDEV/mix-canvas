<?php
include_once('../assets/config/config.php');
session_start();


if (isset($_POST['submit'])) {
    $_SESSION['recurso']  = (string)$_POST['recursochave'];
    $_SESSION['proposta']  = (string)$_POST['propostavalor'];
    $_SESSION['segmento']  = (string)$_POST['segmentocliente'];
    $_SESSION['parceiros']  = (string)$_POST['parceiroschave'];
    $_SESSION['problems']  = (string)$_POST['problemas'];
    $_SESSION['solutions']  = (string)$_POST['solucao'];
    $_SESSION['relacao']  = (string)$_POST['relacaocliente'];
    $_SESSION['atividades']  = (string)$_POST['atividadeschave'];
    $_SESSION['metrica']  = (string)$_POST['metricas'];
    $_SESSION['canais']  = (string)$_POST['canaisdistribuicao'];
    $_SESSION['estrutura']  = (string)$_POST['estruturacusto'];
    $_SESSION['vantagens']  = (string)$_POST['vantagemcompetitiva'];
    $_SESSION['fonte']  = (string)$_POST['fontereceita'];
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
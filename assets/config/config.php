<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '2530';
$dbName = 'mix_canvas';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

global $conexao;


$returnToPage = "";
global $returnToPage;

// if ($conexao->connect_errno) {
//     echo 'ERROOU';
// } else {
//     echo 'Conexão efetuada com Sucesso';
// }
?>
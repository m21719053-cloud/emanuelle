<?php

$host = "sql200.infinityfree.com";
$banco = "if0_43534205_atividade";
$usuario = "if0_43534205";
$senha = "t0s8RZMotZIPT";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

?>

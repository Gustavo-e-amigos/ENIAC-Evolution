<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sistema_pontos";

$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>
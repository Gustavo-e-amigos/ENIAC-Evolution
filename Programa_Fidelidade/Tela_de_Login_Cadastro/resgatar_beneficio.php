<?php
session_start();
require_once 'conexao.php';

if (!isset($_SESSION['ra']) || !isset($_SESSION['nome']) || !isset($_SESSION['pontos'])) {
    echo json_encode(['erro' => 'Sessão expirada. Faça login novamente.']);
    exit;
}

$beneficio = $_POST['beneficio'] ?? '';
$pontosNecessarios = $_POST['pontos'] ?? 0;

$ra = $_SESSION['ra'];
$nome = $_SESSION['nome'];
$pontosAtuais = $_SESSION['pontos'];

// Buscar email do usuário
$sqlEmail = "SELECT email FROM usuarios WHERE ra = ?";
$stmtEmail = $conexao->prepare($sqlEmail);
$stmtEmail->bind_param("s", $ra);
$stmtEmail->execute();
$resultEmail = $stmtEmail->get_result();
$email = $resultEmail->fetch_assoc()['email'] ?? '';

// Verifica se tem pontos suficientes e subtrai
if ($pontosAtuais < $pontosNecessarios) {
    echo json_encode(['erro' => 'Você não tem pontos suficientes!']);
    exit;
}  

$novosPontos = $pontosAtuais - $pontosNecessarios;
$_SESSION['pontos'] = $novosPontos;

// Atualização de pontos do banco
$update = $conexao->prepare("UPDATE usuarios SET pontos = ? WHERE ra = ?");
$update->bind_param("is", $novosPontos, $ra);
$update->execute();

// Registra o benefício do usuario 
$insert = $conexao->prepare("INSERT INTO beneficios_resgatados (ra, nome, email, beneficio, pontos_gastos) VALUES (?, ?, ?, ?, ?)");
$insert->bind_param("ssssi", $ra, $nome, $email, $beneficio, $pontosNecessarios);
$insert->execute();

echo json_encode(['sucesso' => 'Benefício resgatado com sucesso!']);
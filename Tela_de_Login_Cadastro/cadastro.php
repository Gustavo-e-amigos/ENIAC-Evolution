<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome  = trim($_POST['nome']);
    $ra    = trim($_POST['ra']);
    $email = trim($_POST['email']);
    $cpf   = trim($_POST['cpf']);
    $senha = $_POST['senha'];

   
    if (empty($nome) || empty($ra) || empty($email) || empty($cpf) || empty($senha)) {
        die("Por favor, preencha todos os campos.");
    }

    // Opções de Senha
   $confirmar_senha = $_POST['confirma_senha'];

   if ($senha !== $confirmar_senha) {
    die("As senhas não coincidem.");
}

 $senhaHash = $senha;

    // Pontuação inicial
    $pontos = 100;

    // Prepara a inserção
    $sql = "INSERT INTO usuarios (nome, ra, email, cpf, senha, pontos, data_cadastro)
            VALUES (?, ?, ?, ?, ?, ?, NOW())";

    $stmt = $conexao->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    
    $stmt->bind_param("sssssi", $nome, $ra, $email, $cpf, $senhaHash, $pontos);

    
    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.html';</script>";
        exit();
        header("Location: login.html");
        exit();
    } else {
        if ($conexao->errno == 1062) {
            echo "RA, Email ou CPF já estão cadastrados.";
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
    }

    $stmt->close();
    $conexao->close();
}
?>

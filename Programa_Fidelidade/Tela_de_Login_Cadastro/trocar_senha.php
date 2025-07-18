<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ra = trim($_POST['ra']);
    $email = trim($_POST['email']);
    $nova_senha = $_POST['nova_senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    if (empty($ra) || empty($email) || empty($nova_senha) || empty($confirmar_senha)) {
        echo "<script>alert('Preencha todos os campos.'); window.history.back();</script>";
        exit();
    }

    if ($nova_senha !== $confirmar_senha) {
        echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
        exit();
    }
    
    $senhaHash = $nova_senha;

    $sql = "UPDATE usuarios SET senha = ? WHERE ra = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss", $senhaHash, $ra);
    
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Senha atualizada com sucesso!'); window.location.href='login.html';</script>";
        } else {
            echo "<script>alert('RA não encontrado.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Erro ao atualizar senha.'); window.history.back();</script>";
    }

    $stmt->close();
    $conexao->close();
}
?>
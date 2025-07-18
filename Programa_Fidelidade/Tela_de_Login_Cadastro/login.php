<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['usuario-ra']) || !isset($_POST['senha'])) {
        echo "<script>alert('Campo RA ou Senha não enviados.'); window.location.href='login.html';</script>";
        exit();
    }

    $ra = trim($_POST['usuario-ra']);
    $senha = trim($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE RA = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $ra);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (isset($usuario['senha']) && $senha === $usuario['senha']) {
            $_SESSION['ra'] = $usuario['RA'];
            $_SESSION['nome'] = $usuario['Nome'];
            $_SESSION['pontos'] = $usuario['Pontos'];

            header("Location: pontos.php");
            exit();
        } else {
            echo "<script>alert('Senha incorreta!'); window.location.href='login.html';</script>";
            exit();
        }
    } else {
        echo "<script>alert('RA não encontrado!'); window.location.href='login.html';</script>";
        exit();
    }
}
?>
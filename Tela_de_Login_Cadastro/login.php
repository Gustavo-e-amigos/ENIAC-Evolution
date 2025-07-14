<?php
session_start();
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if (!isset($_POST['usuario-ra']) || !isset($_POST['senha'])) {
        die("Campo RA ou Senha não enviados.");
    }

    $ra = trim($_POST['usuario-ra']);
    $senha = trim($_POST['senha']); // Adicionado trim aqui

    $sql = "SELECT * FROM usuarios WHERE ra = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $ra);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        echo "Senha digitada: " . $senha . "<br>";
        echo "Senha no banco: " . $usuario['senha'] . "<br>";

        if (isset($usuario['senha']) && $senha === $usuario['senha']) {
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['ra'] = $usuario['ra'];
            $_SESSION['pontos'] = $usuario['pontos'];
            header("Location: home.html");
            exit();
        } else {
            echo "<strong>Senha incorreta!</strong>";
        }
    } else {
        echo "<strong>RA não encontrado!</strong>";
    }
}

?>

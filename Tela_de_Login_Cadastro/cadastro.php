<?php
require_once 'conexao.php';
// Coleta os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nome  = trim($_POST['nome']);
        $ra    = trim($_POST['ra']);
        $email = trim($_POST['email']);
        $cpf   = trim($_POST['cpf']);
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirma_senha'];

                if (empty($nome) || empty($ra) || empty($email) || empty($cpf) || empty($senha)) {
            echo "<script>alert('Por favor, preencha todos os campos.'); window.history.back();</script>";
            exit();
        }

    // Senha Confirmada ou errada 
        if ($senha !== $confirmar_senha) {
            echo "<script>alert('As senhas não coincidem.'); window.history.back();</script>";
            exit();
        }

    // Lembrente: Deixa mais Seguro depois
    $senhaHash = $senha;
    // Pontuação inicial 
    $pontos = 100;

    // Prepara a inserção
$sql = "INSERT INTO usuarios (nome, ra, email, cpf, senha, pontos, data_cadastro)
                VALUES (?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sssssi", $nome, $ra, $email, $cpf, $senhaHash, $pontos);
        $stmt->execute();

        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.html';</script>";
        exit();

    } catch (mysqli_sql_exception $e) {
        if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
            echo "<script>alert('RA, Email ou CPF já estão cadastrados.'); window.history.back();</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar. Tente novamente mais tarde.'); window.history.back();</script>";
        }
    } finally {
        $conexao->close();
    }
}
?>


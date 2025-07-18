<?php
session_start();
require_once 'conexao.php';
// Verifica se o usuário está logado
if (!isset($_SESSION['ra']) || !isset($_SESSION['nome']) || !isset($_SESSION['pontos'])) {
    header("Location: login.html");
    exit();
}

$nome = $_SESSION['nome'];
$pontos = $_SESSION['pontos'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ENIAC / POINTZONE</title>
  <link rel="stylesheet" href="CSS/css-p.css" />
</head>
<body>

<header class="pointzone">
  <div class="container-zone">
    <img src="IMG/image 1.png" alt="PointZone" class="logo" height="100px" width="100px"/>
    <h1>POINTZONE</h1>

    <nav class="menu-bar">
      <input type="checkbox" id="menu-toggle" class="checkbox" />
      <label for="menu-toggle" class="menu-icon">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </label>
      <ul class="menu-items">
        <li><a href="home.html">Início</a></li>
        <li><a href="beneficios.php">Benefícios</a></li>
        <li><a href="pontos.php">PointZone</a></li>
        <li><a href="suporte.html">Contato</a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </div>
</header>

<section class="flex-box">
  <div>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
    <p><strong>Total de Pontos:</strong> <?php echo htmlspecialchars($pontos); ?></p>
  </div>
</section>

<section class="container-box">
  <div class="card">
    <h2>Participação nos Eventos</h2>
    <img src="IMG/participacao-p.png" alt="ft" height="100" />
    <br>
    <button>Ver</button>
  </div>

  <div class="card">
    <h2>Realização de Atividades</h2>
    <img src="IMG/atividade-p.png" alt="ft" height="100" />
    <br>
    <button>Ver</button>
  </div>

  <div class="card">
    <h2>Aniversário</h2>
    <img src="IMG/aniversario-p.png" alt="ft" height="100" />
    <br>
    <button>Ver</button>
  </div>

  <div class="card">
    <h2>Siga o ENIAC</h2>
    <img src="IMG/instagram-p.png" alt="ft" height="100" />
    <br>
    <button>Ver</button>
  </div>
</section>

<footer class="rodape">
  <div class="container">
    <img src="IMG/image 1.png" alt="Logo Eniac" />

    <div class="footer-sections">
      <div class="footer-box">
        <h3>Links Rápidos</h3>
        <ul>
          <li><a href="#">Página Inicial</a></li>
          <li><a href="#">Serviços</a></li>
          <li><a href="#">Fale Conosco</a></li>
          <li><a href="#">Política de Privacidade</a></li>
        </ul>
      </div>

      <div class="footer-box">
        <h3>Contato</h3>
        <ul>
          <li><a href="mailto:contato@empresa.com">contato@empresa.com</a></li>
          <li><a href="tel:+5511999999999">(11) 99999-9999</a></li>
          <li><a href="#">Rua Exemplo, 123</a></li>
          <li><a href="#">Suporte via WhatsApp</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</body>
</html>

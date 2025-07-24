<?php
session_start();
require_once 'conexao.php';

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
  <link rel="stylesheet" href="CSS/pontos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
<!--Menubar desktop-->

<header class="cabecalho">
  <div class="logo-e-nome">
    <img id="logo" src="IMG/image 1.png" alt="Logo Eniac" />
    <p> Programa de fidelidade</p>
  </div>

  <nav class="Menu">
    <ul>
      <li><a href="home.html">Início</a></li>
      <li><a href="beneficios.php">Benefícios</a></li>
      <li><a href="pontos.php">PointZone</a></li>
      <li><a href="suporte.html">Contato</a></li>
      <li><a href="logout.php">Sair</a></li>
    </ul>
  </nav>
</header>

<!-- Menu mobile -->
<div class="topnav" id="myTopnav">
  <div class="topnav-header">
    <img src="IMG/image 1.png" alt="Logo Eniac" class="topnav-logo" />
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <a href="home.html" class="active">Programa de Fidelidade</a>
  <a href="beneficios.php">Benefícios</a>
  <a href="pontos.php">PointZone</a>
  <a href="suporte.html">Contato</a>
  <a style="background-color: #F06E6E;" href="logout.php">Sair</a>
</div>

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
    <a href="https://forms.gle/Czv9rEPcJqLE16fB8"><button>Enviar</button></a>
  </div>

  <div class="card">
    <h2>Realização de Atividades</h2>
    <img src="IMG/atividade-p.png" alt="ft" height="100" />
    <br>
    <a href="https://forms.gle/Czv9rEPcJqLE16fB8"><button>Enviar</button></a>
  </div>

  <div class="card">
    <h2>Aniversário</h2>
    <img src="IMG/aniversario-p.png" alt="ft" height="100" />
    <br>
    <a href="https://forms.gle/Czv9rEPcJqLE16fB8"><button>Enviar</button></a>
  </div>

  <div class="card">
    <h2>Siga o ENIAC</h2>
    <img src="IMG/instagram-p.png" alt="ft" height="100" />
    <br>
    <a href="https://forms.gle/Czv9rEPcJqLE16fB8"><button>Enviar</button></a>
  </div>
</section>

<footer class="rodape">
  <div class="container-footer">
    <div class="footer-logo">
      <img src="IMG/image 1.png" alt="Logo Eniac" />
      <p>Programa de Fidelidade ENIAC</p>
    </div>

    <div class="footer-sections">
      <div class="footer-box">
        <h3>Links Rápidos</h3>
        <ul>
          <li><a href="home.html">Página Inicial</a></li>
          <li><a href="beneficios.php">Benefícios</a></li>
          <li><a href="suporte.html">Fale Conosco</a></li>
          <li><a href="politica_privacidade.html">Política de Privacidade</a></li>
        </ul>
      </div>

      <div class="footer-box">
        <h3>Contato</h3>
        <ul>
          <li><a href="mailto:contato@eniac.edu.br">Email: contato@eniac.edu.br</a></li>
          <li><a href="https://www.google.com/search?q=eniac&oq=eniac&gs_lcrp=EgZjaHJvbWUqDQgAEAAY4wIYsQMYgAQyDQgAEAAY4wIYsQMYgAQyEwgBEC4YrwEYxwEYsQMYgAQYjgUyBwgCEAAYgAQyBwgDEAAYgAQyBwgEEAAYgAQyBggFEEUYPTIGCAYQRRg9MgYIBxBFGDzSAQc5NjNqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8#">(11) 2472-5500</a></li>
          <li><a href="https://www.google.com/maps/place/Eniac/@-23.4728015,-46.5333825,17z/data=!3m1!4b1!4m6!3m5!1s0x94cef55eb2540001:0xdf80bffdcd8b95f!8m2!3d-23.4728015!4d-46.5308076!16s%2Fg%2F122tpv79?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">R. Força Pública, 89 - Centro, Guarulhos - SP, 07012-030</a></li>
          <li><a href="https://www.eniac.edu.br/chat">Suporte via chat</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

</body>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    x.classList.toggle("responsive");
  }
</script>
</html>

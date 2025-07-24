<?php
session_start();
if (!isset($_SESSION['nome']) || !isset($_SESSION['pontos'])) {
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ENIAC / Benefícios</title>
  <link rel="stylesheet" href="CSS/beneficios.css" />
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
  
  <section class="beneficios">
    <div class="container">
      <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
      <p><strong>Total de Pontos:</strong> <?php echo htmlspecialchars($pontos); ?></p>
      <h2>Conheça Nossos Benefícios</h2>
      <div class="cards">
 
        <div class="card">
          <img src="IMG/cafe-b.png" alt="">
          <h3>Vale Café e Lanche</h3>
          <p>(1500 pontos)</p>
          <button class="btn-aderir">Aderir</button>
        </div>
 
        <div class="card">
          <img src="IMG/caixa-b.png" alt="">
          <h3>Mystery box </h3>
          <p>(3800 pontos)</p>
          <button class="btn-aderir">Aderir</button>
        </div>
 
        <div class="card">
          <img src="IMG/camisa-b.png" alt="">
          <h3>Ganha uma camisa</h3>
          <p>(2000 pontos)</p>
          <button class="btn-aderir">Aderir</button>
        </div>
 
        <div class="card">
          <img src="IMG/certificado-b.png" alt="">
          <h3>Certificado de 10h </h3>
          <p>(1000 pontos)</p>
          <button class="btn-aderir">Aderir</button>
        </div>
 
        <div class="card">
          <img src="IMG/curso-b.png" alt="">
          <h3>Curso da sua área</h3>
          <p>(1800 pontos)</p>
          <button class="btn-aderir">Aderir</button>
        </div>
 
        <div class="card">
          <img src="IMG/garrafa-b.png" alt="">
          <h3>Ganha uma garrafa</h3>
          <p>(1500 pontos)</p>
          <button class="btn-aderir">Aderir</button>
        </div>
 
      </div>
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
  <script>
      function myFunction() {
    var x = document.getElementById("myTopnav");
    x.classList.toggle("responsive");
  }
   /* Efeito botão de clique */
  const botoesAderir = document.querySelectorAll('.btn-aderir');

  botoesAderir.forEach((botao) => {
    botao.addEventListener('click', () => {
      const nomeBeneficio = botao.parentElement.querySelector('h3').textContent;
      const pontosTexto = botao.parentElement.querySelector('p').textContent;
      const pontos = parseInt(pontosTexto.match(/\d+/)[0]);
/* Resgatar */
      fetch('resgatar_beneficio.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `beneficio=${encodeURIComponent(nomeBeneficio)}&pontos=${pontos}`
      })
      .then(res => res.json())
      .then(data => {
        if (data.erro) {
          alert(data.erro);
        } else {
          alert(data.sucesso);
          location.reload();
        }
      });
    });
  });
</script>

  </script>
 
</body>
</html>



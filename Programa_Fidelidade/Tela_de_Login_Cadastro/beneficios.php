<?php
session_start();
// Verifica se o usuário está logado
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
  <link rel="stylesheet" href="CSS/css.css" />
  <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>




  <header class="cabecalho">
    <div class="logo-e-nome">
      <img src="IMG/image 1.png" alt="Logo Eniac" />
      <p>Programa de Fidelidade</p>
    </div>




    <nav class="Menu">
      <ul>
        <li><a href="home.html">Início</a></li>
        <li><a href="beneficios.php">Benefício</a></li>
        <li><a href="pontos.php">PointZone</a></li>
        <li><a href="suporte.html">Contato</a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>




      <div class="Cadastro">
        <button>Cadastre-se</button>
      </div>
      <div class="Login">
        <button>Login</button>
      </div>
    </nav>
  </header>




  
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
          <h3>Certificado de 10h Complementar</h3>
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
    <div class="container">
      <img src="IMG/image 1.png" alt="Logo Eniac" />




      <div class="footer-sections">
        <div class="footer-box">
          <h3>Links Rápidos</h3>
          <ol>
            <li><a href="home.html">Página Inicial</a></li>
            <li><a href="beneficios.php">Benefício</a></li>
            <li><a href="suporte.html">Fale Conosco</a></li>
            <li><a href="#">Política de Privacidade</a></li>
          </ol>
        </div>




        <div class="footer-box">
          <h3>Contato</h3>
          <ol>
            <li><a href="contato@empresa.com">contato@empresa.com</a></li>
            <li><a href="tel:+5511999999999">(11) 99999-9999</a></li>
            <li><a href="#">Endereço: Rua Exemplo, 123</a></li>
            <li><a href="#">Suporte via WhatsApp</a></li>
          </ol>
        </div>
      </div>
    </div>
  </footer>
  <script>
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



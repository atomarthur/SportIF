<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css?v=2">
    <link rel="stylesheet" type="text/css" href="../css/inicio.css?v=2">
    <title>SportIF</title>

</head>
<body>

<header>
    <div class="logo_container">
        <a href="inicial.php">
            <img src="../imagens/logo.jpg" alt="Logo do IFBA" class="logo">
        </a>
    </div>
    <h1>SportIF</h1>
    <div class="sino">
        <a href="../php/notificacoes.php">
            <img src="../imagens/sino.png" alt="Notificação">
        </a>
    </div>
</header>

    
    <nav>
        <a href="../php/cadastro.php">Inscrições</a>
        <a href="classificacao.php">Classificação</a>
        <a href="competicoes.php">Jogos</a>
        <a href="estatisticas.php">Estatísticas</a>
        <a href="selecionar_jogo.php">Placar</a>
        <a href="suporte.php">Suporte</a>
    </nav>

    <main>
        <section class="Bem-vindo">
            <h2>Bem-vindo ao SportIF!</h2>
            <p>Este é o seu espaço dedicado para acompanhar, participar e se envolver com as competições esportivas realizadas 
                pelo Instituto Federal da Bahia (IFBA). Nosso portal foi desenvolvido para fornecer uma plataforma moderna, acessível e interativa para atletas, 
                organizadores e fãs de esportes, com uma série de funcionalidades que irão melhorar a sua experiência nas competições!</p>
        </section>
    </main>
    <div class="menu-central">
        <div class="menu-item">
            <button onclick="window.location.href='cadastro.php'">Inscrições</button>
            <p>Cadastre-se para participar das competições.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='../php/classificacao.php'">Classificação</button>
            <p>Veja o ranking atual das competições.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='../php/competicoes.php'">Jogos</button>
            <p>Acesse as informações das competições em andamento.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='../php/estatisticas.php'">Estatísticas</button>
            <p>Confira as estatísticas detalhadas de desempenho.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='selecionar_jogo.php'">Placar</button>
            <p>adicione os valores dos placares das competições.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='../php/suporte.php'">Suporte</button>
            <p>Entre em contato para obter ajuda ou suporte.</p>
        </div>
    </div>

    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
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
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
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

    <div class="menu-central">
        <div class="menu-item">
            <button onclick="window.location.href='cadastro_time.php'">Inscrição de times</button>
            <p>Cadastre times para participar das competições.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='cadastro_jogo.php'">Inscrição de jogos</button>
            <p>Cadastre os jogos que ocorreram.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='cadastro_estatistica.php'">Inscrição de estatísticas</button>
            <p>Cadastre as estatíscas e informações de cada jogo.</p>
        </div>
    </div>

    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
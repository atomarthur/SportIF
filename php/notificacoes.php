<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<?php
include 'banco.php';

$notificacoes = mostrar_notificacoes();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css?v=2">
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

    <div class="notificaçao-container">
        <h2>Notificações</h2>

        <?php foreach ($notificacoes as $notificacao) { ?>
        
            <div class="not-card">
            <p class="nottit"><?php echo($notificacao['titulo'])?></p>
            <p class="notcontent"><?php echo($notificacao['mensagem'])?></p>
        </div>

        <?php } ?>

    </div>

    <footer>
        <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
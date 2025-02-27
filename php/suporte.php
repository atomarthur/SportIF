<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css">
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

    <main class="centro">
        <div class="suporte-container">
            <h2>Contato</h2>
            <p>Se precisar de ajuda, entre em contato conosco através dos meios abaixo ou envie uma mensagem usando o formulário.</p>
            <p><strong>Telefone:</strong> (71) 1234-5678</p>
            <p><strong>E-mail:</strong> sportifppa@gmail.com</p>
            
            <form action="cadastrar_mensagem.php" method="post">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
                </div>
                <div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui..." rows="5" required></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
            <p class="login_links">Ver mensagens: <a href="mensagens.php">Clique aqui</a></p> 
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2025 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

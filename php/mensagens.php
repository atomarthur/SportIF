<?php
include 'banco.php';

$mensagens = obter_mensagem();
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
    <br>    
    <div class="container">
        <h1>Mensagens Enviadas por Usuários</h1>

        <?php if(count($mensagens) > 0): ?>
            <div class="Tabela"> 
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Usuário</th>
                            <th>Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mensagens as $mensagem): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($mensagem['id']); ?></td>
                                <td><?php echo htmlspecialchars($mensagem['nome']); ?></td>
                                <td><?php echo htmlspecialchars($mensagem['mensagem']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p>Não há mensagens enviadas.</p>
        <?php endif; ?>
    </div>
    <footer class="footer">
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

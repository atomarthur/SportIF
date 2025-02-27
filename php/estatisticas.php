<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<?php

include 'banco.php';

$jogos = mostrar_jogos();
$estatisticas = obter_estatisticas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css">
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

    <div class="tabela">
        <h2>Estatísticas dos Jogos</h2>
        <table>
            <thead>
                <tr>
                    <th>Identificador de jogo</th>
                    <th>Jogo</th>
                    <th>Estatística</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estatisticas as $estatistica): ?>
                    <tr>
                        <td><?= htmlspecialchars($estatistica['id_jogo']) ?></td>
                        <td><?= htmlspecialchars($estatistica['equipe_a']) ?> x <?= htmlspecialchars($estatistica['equipe_b']) ?></td>
                        <td><?= htmlspecialchars($estatistica['estatistica_nome']) ?></td>
                        <td><?= htmlspecialchars($estatistica['valor']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
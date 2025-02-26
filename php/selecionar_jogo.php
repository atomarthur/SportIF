<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<?php
include 'banco.php';

$jogos = mostrar_jogos();
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

    <div class="tabela">
        <h2>Escolha um jogo para atualizar o placar:</h2>
        <table>
            <thead>
                <tr>
                    <th>Modalidade</th>
                    <th>Equipe A</th>
                    <th>Placar</th>
                    <th>Equipe B</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogos as $jogo): ?>
                    <tr>
                        <td><?= htmlspecialchars($jogo['nome_modalidade']) ?></td>
                        <td><?= htmlspecialchars($jogo['equipe_a']) ?></td>
                        <td><?php echo "{$jogo['placar_equipe_a']} x {$jogo['placar_equipe_b']}"; ?></td>
                        <td><?= htmlspecialchars($jogo['equipe_b']) ?></td>
                        <td><?= htmlspecialchars($jogo['status_jogo']) ?></td>
                        <td><a href="atualizar_placar.php?id=<?= $jogo['id'] ?>">Atualizar Placar</a></td>
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

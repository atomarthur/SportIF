<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<?php
include 'banco.php';

$jogos = mostrar_jogos();

$modalidades = []; 

foreach ($jogos as $jogo) {
    $modalidades[$jogo['nome_modalidade']][] = $jogo;
}
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

    <?php foreach ($modalidades as $nome_modalidade => $jogos_modalidade) { ?>
    <div class="tabela">
        <h2><?= htmlspecialchars($nome_modalidade) ?></h2>
        <table>
            <thead>
                <tr>
                    <th>Equipe A</th>
                    <th>Placar</th>
                    <th>Equipe B</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogos_modalidade as $jogo) { ?>
                    <tr>
                        <td><?= htmlspecialchars($jogo['equipe_a']) ?></td>
                        <td><?php echo "{$jogo['placar_equipe_a']} x {$jogo['placar_equipe_b']}"; ?></td>
                        <td><?= htmlspecialchars($jogo['equipe_b']) ?></td>
                        <td><?= htmlspecialchars($jogo['status_jogo']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } ?>



    <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br>

    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>
    
</body>
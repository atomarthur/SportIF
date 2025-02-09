<?php
include 'banco.php';

$times = mostrar_classificacao();

$modalidades = []; 

foreach ($times as $time) {
    $modalidades[$time['nome_modalidade']][] = $time;
}
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
        <h1>SportIF</h1>
        <div class="logo_container">
        <img src="../imagens/logo.jpg" alt="Logo do IFBA" class="logo">
    </div>
    </header>
    <nav>
        <a href="../php/cadastro.php">Inscrição</a>
        <a href="notificacoes.html">Notificação</a>
        <a href="../php/classificacao.php">Classificação</a>
        <a href="competicoes.html">Competições</a>
        <a href="estatiscticas.html">Estatísticas</a>
        <a href="placar.html">Placar</a>
        <a href="suporte.html">Suporte</a>
    </nav>

    <?php foreach ($modalidades as $nome_modalidade => $times) { ?>
    <div class="tabela">
        <h2><?= htmlspecialchars($nome_modalidade) ?></h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Sigla</th>
                    <th>Medalhas - Ouro</th>
                    <th>Medalhas - Prata</th>
                    <th>Medalhas - Bronze</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($times as $time) { ?>
                    <tr>
                        <td><?= htmlspecialchars($time['nome']) ?></td>
                        <td><?= htmlspecialchars($time['sigla']) ?></td>
                        <td><?= htmlspecialchars($time['medalhas_ouro']) ?></td>
                        <td><?= htmlspecialchars($time['medalhas_prata']) ?></td>
                        <td><?= htmlspecialchars($time['medalhas_bronze']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } ?>


    <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br>

    <footer>
        <p>&copy;2024 SportIF. Todos os direitos reservados.</p>
    </footer>
    
</body>
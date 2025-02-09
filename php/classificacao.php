<?php
include 'banco.php';

$times = mostrar_classificacao();
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
    <div class="tabela">

        <h1>Classificação</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Time</th>
                <th>Sigla</th>
                <th>Modalidade</th>
                <th>Medalhas - Bronze</th>
                <th>Medalhas - Prata</th>
                <th>Medalhas - Ouro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($times as $time) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($time['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($time['sigla']) . "</td>";
                    echo "<td>" . htmlspecialchars($time['nome_modalidade']) . "</td>";
                    echo "<td>" . htmlspecialchars($time['medalhas_ouro']) . "</td>";
                    echo "<td>" . htmlspecialchars($time['medalhas_prata']) . "</td>";
                    echo "<td>" . htmlspecialchars($time['medalhas_bronze']) . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    </div>

    <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br> <br><br><br><br> <br><br><br><br><br><br><br><br>

    <footer>
        <p>&copy;2024 SportIF. Todos os direitos reservados.</p>
    </footer>
    
</body>
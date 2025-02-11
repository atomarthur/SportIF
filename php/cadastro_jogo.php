<?php
include 'config.php';
$conn = conectar();

// Carregar modalidades do banco
$sqlModalidades = "SELECT id_modalidade, nome FROM modalidades";
$stmtModalidades = $conn->query($sqlModalidades);
$modalidades = $stmtModalidades->fetchAll(PDO::FETCH_ASSOC);

// Carregar todas as equipes para manipulação via JavaScript
$sqlEquipes = "SELECT id_time, nome, id_modalidade FROM equipes";
$stmtEquipes = $conn->query($sqlEquipes);
$equipes = $stmtEquipes->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css">
    <title>Cadastro de Times - SportIF</title>
    <script src="../javascript/carregar_times.js" defer></script>
</head>
<body>
    <header>
    <h1>SportIF</h1>
    <div class="logo_container">
        <a href="inicial.php">
            <img src="../imagens/logo.jpg" alt="Logo do IFBA" class="logo">
        </a>
    </div>
    </header>
    <nav>
        <a href="../php/cadastro.php">Inscrição</a>
        <a href="notificacoes.html">Notificação</a>
        <a href="classificacao.php">Classificação</a>
        <a href="competicoes.php">Competições</a>
        <a href="estatiscticas.html">Estatísticas</a>
        <a href="placar.html">Placar</a>
        <a href="suporte.html">Suporte</a>
    </nav>
    <div class="centro">
        <div class="Cadastro"> 
            <h2>Inscrição de Times</h2>
            <p>Inscrição de equipes para competições do IFBA</p>
            <form action="cadastrar_jogo.php" method="post">
                <div>
                    <select id="modalidade" name="modalidade" required>
                        <option value="" disabled selected>Selecione a modalidade</option>
                        <?php foreach ($modalidades as $modalidade): ?>
                            <option value="<?= $modalidade['id_modalidade'] ?>"><?= $modalidade['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                            
                <!-- Seleção da Equipe A -->
                <div>
                    <select id="equipe_a" name="equipe_a" required>
                        <option value="">Selecione a Equipe A</option>
                    </select>
                </div>

                <!-- Seleção da Equipe B -->
                <div>
                    <select id="equipe_b" name="equipe_b" required>
                        <option value="">Selecione a Equipe B</option>
                    </select>
                </div>

                <!-- Seleção do Status do Jogo -->
                <div>
                    <select id="status_jogo" name="status_jogo" required>
                        <option value="">Selecione o status</option>
                        <option value="Agendado">Agendado</option>
                        <option value="Em Andamento">Em Andamento</option>
                        <option value="Finalizado">Finalizado</option>
                    </select>
                </div>

                <button type="submit">Cadastrar Jogo</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy;2024 SportIF. Todos os direitos reservados.</p>
    </footer>

    <script>
        const equipes = <?= json_encode($equipes) ?>; // Enviar as equipes para o JavaScript externo
    </script>
</body>
</html>

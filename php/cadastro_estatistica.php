<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<?php
include 'config.php';
$conn = conectar();

// Carregar modalidades do banco
$sqlModalidades = "SELECT id_modalidade, nome FROM modalidades";
$stmtModalidades = $conn->query($sqlModalidades);
$modalidades = $stmtModalidades->fetchAll(PDO::FETCH_ASSOC);

// Carregar jogos para manipulação via JavaScript
$sqlJogos = "SELECT j.id, m.nome AS nome_modalidade, e1.nome AS equipe_a, e2.nome AS equipe_b FROM jogos j JOIN equipes e1 ON j.equipe_a_id = e1.id_time JOIN equipes e2 ON j.equipe_b_id = e2.id_time JOIN modalidades m ON j.modalidade_id = m.id_modalidade";

$stmtJogos = $conn->query($sqlJogos);
$jogos = $stmtJogos->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css?v=2">
    <title>SportIF</title>
    <script src="../javascript/carregar_jogos.js" defer></script>
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
    <div class="centro">
    <div class="Cadastro"> 
        <h2>Inscrição de estatísticas</h2>
        <form action="cadastrar_estatistica.php" method="post">
            
            <!-- Seleção da Modalidade -->
            <div>
                <select id="modalidade" name="modalidade" required>
                    <option value="" disabled selected>Selecione a modalidade</option>
                    <?php foreach ($modalidades as $modalidade): ?>
                        <option value="<?= htmlspecialchars($modalidade['nome']) ?>"><?= htmlspecialchars($modalidade['nome']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Seleção do Jogo -->
            <div>
                <select id="jogo" name="id_jogo" required>
                    <option value="">Selecione um jogo</option>
                </select>
            </div>

            <!-- Estatística -->
            <div>
                <input type="text" name="estatistica" placeholder="Nome da estatística (ex: Cartões, Faltas)" required>
            </div>

            <!-- Valor -->
            <div>
                <input type="number" name="valor" placeholder="Valor da estatística" required>
            </div>

            <button type="submit">Confirmar</button>
        </form>
    </div>
</div>
    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>

    <script>
    const jogos = <?= json_encode($jogos) ?>; // Passa os jogos para o JS
    </script>
</body>
</html>

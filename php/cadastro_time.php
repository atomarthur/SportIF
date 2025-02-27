<?php
include 'UserLoginSession.php';
verificarSessao();
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
    <div class="centro">
        <div class="Cadastro"> 
            <h2>Inscrição de times</h2>
            <p>Inscrição de equipes para competições do IFBA</p>
            <form action="cadastrar_time.php" method="post">
                <div>
                    <input type="text" placeholder="Nome do time" id="nomeTime" name="nomeTime" required>
                </div>
                <div>
                    <input type="text" placeholder="Sigla" id="siglaTime" name="siglaTime" maxlength="3" required>
                </div>
                <div>
                    <select id="modalidade" name="modalidade" required>
                    <option value="" disabled selected>Selecione a modalidade</option>
                        <?php
                            include 'config.php';
                            $conn = conectar();
                            $sql = "SELECT id_modalidade, nome FROM modalidades";
                            $stmt = $conn->query($sql);

                            while ($modalidade = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<option value='" . $modalidade['nome'] . "'>" . $modalidade['nome'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <input type="text" placeholder="Medalhas - Bronze" id="medalhasBronze" name="medalhasBronze" required>
                </div>
                <div>
                    <input type="text" placeholder="Medalhas - Prata" id="medalhasPrata" name="medalhasPrata" required>
                </div>
                <div>
                    <input type="text" placeholder="Medalhas - Ouro" id="medalhasOuro" name="medalhasOuro" required>
                </div>
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>
    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

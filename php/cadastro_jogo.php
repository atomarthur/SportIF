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
            <img src="../imagens/logo.jpg" alt="Logo do IFBA" class="logo">
        </div>
    </header>
    <div class="centro">
        <div class="Cadastro"> 
            <h2>Inscrição de Times</h2>
            <p>Inscrição de equipes para competições do IFBA</p>
            <form action="cadastrarjogo.php" method="post">
                <div>
                    <select id="modalidade" name="modalidade" required onchange="carregar_times()">
                        <option value="" disabled selected>Selecione a modalidade</option>
                        <?php
                            include 'config.php';
                            $conn = conectar();
                            $sql = "SELECT id_modalidade, nome FROM modalidades";
                            $stmt = $conn->query($sql);

                            while ($modalidade = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<option value='" . $modalidade['id_modalidade'] . "'>" . $modalidade['nome'] . "</option>";
                            }
                        ?>
                    </select>
                </div>
                            
                <!-- Equipe A -->
                <div>
                    <select id="equipe_a" name="equipe_a" required>
                        <option value="" disabled selected>Selecione a Equipe A</option>
                    </select>
                </div>

                <!-- Equipe B -->
                <div>
                    <select id="equipe_b" name="equipe_b" required>
                        <option value="" disabled selected>Selecione a Equipe B</option>
                    </select>
                </div>

                <button type="submit">Cadastrar Jogo</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy;2024 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

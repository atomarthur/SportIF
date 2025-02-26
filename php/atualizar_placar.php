<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<?php
include 'banco.php';  // Incluindo o arquivo com a função de atualização do placar

if (isset($_GET['id'])) {
    $id_jogo = $_GET['id'];
}

$jogo = obter_jogo_por_id($id_jogo);

$time_a = $jogo['equipe_a'];
$time_b = $jogo['equipe_b'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css?v=2">
    <script src="../javascript/placar.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
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
    <div class="container">
        <h1>Placar do Jogo</h1>
        <form method="POST" action="funcao_atualizar_placar.php">
        
        <input type="hidden" name="id_jogo" value="<?php echo $id_jogo; ?>">

        <div class="placar">
            <div class="time" id="time-a">
                <h2><?php echo $time_a; ?></h2> <!-- Nome do Time A -->
                <div id="time-a-placar">0</div>
                <input type="hidden" id="placar_a" name="placar_a" value="0"> 
                <button class="incrementar" type = 'button' onclick="atualizarPlacar('a', 'incrementar')">+1</button>
                <button class="decrementar" type = 'button' onclick="atualizarPlacar('a', 'decrementar')">-1</button>
            </div>
            <div class="time" id="time-b">
                <h2><?php echo $time_b; ?></h2> <!-- Nome do Time B -->
                <div id="time-b-placar">0</div>
                <input type="hidden" id="placar_b" name="placar_b" value="0"> 
                <button class="incrementar" type = 'button' onclick="atualizarPlacar('b', 'incrementar')">+1</button>
                <button class="decrementar" type = 'button' onclick="atualizarPlacar('b', 'decrementar')">-1</button>
            </div>
        </div>

        <button class ="reiniciar" type="submit">Atualizar Placar</button>
        </form>
    </div>
    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>

</body>
</html>

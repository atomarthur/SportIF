<?php
include 'UserLoginSession.php';
verificarSessao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sportif.css">
    <link rel="stylesheet" type="text/css" href="../css/inicio.css">
    <title>SportIF</title>

</head>
<body>
    <header>
        <h1>SportIF</h1>
        <div class="logo_container">
            <img src="../imagens/logo.jpg" alt="Logo do IFBA" class="logo">
        </div>
    </header>

    <div class="menu-central">
        <div class="menu-item">
            <button onclick="window.location.href='cadastro_time.php'">Inscrição de times</button>
            <p>Cadastre times para participar das competições.</p>
        </div>
        <div class="menu-item">
            <button onclick="window.location.href='cadastro_jogo.php'">Inscrição de jogos</button>
            <p>Inscreva os jogos.</p>
        </div>
    </div>

    <footer>
        <p>&copy;2024 SportIF. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
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
    <div class="centro">
        <div class="Cadastro">
            <h2>Cadastro</h2>
            <p>Preencha os campos abaixo para criar sua conta</p>
            <form action="../php/cadastrar_usuario.php" method="POST">
                <input type="text" placeholder="Usuário" name="nome" required>
                <input type="password" placeholder="Senha" name="senha" required>
                <input type="password" placeholder="Confirmar senha" name="confirma_senha" required>
                <button type="submit">Cadastrar</button>
            </form>
            <p class="login_links">Já tem uma conta? <a href="index.php">Faça login aqui</a></p>
        </div>
    </div>
    <footer>
    <p>&copy;2025 SportIF. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

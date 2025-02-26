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
    <div class="Login">
        <h2>Login</h2>
        <p>Acesso exclusivo para alunos e outras atribuições do IFBA</p>
        <form action="../php/login.php" method="post">
        <input type ="text" placeholder="Usuário" name="nome" required>
        <input type ="password" placeholder="Senha" name="senha" required>
        <button type="submit">Entrar</button>
        </form>
        <p class="login_links">Realizar cadastro: <a href="cadastro_usuario.php">Clique aqui</a></p>  
    </div>
</div>
<footer>
<p>&copy;2025 SportIF. Todos os direitos reservados.</p>
</footer>

</body>
</html>
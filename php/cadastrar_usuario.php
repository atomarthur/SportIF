<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['senha'])) {

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        cadastrar_usuario($nome, $senha);
    }
}
?>
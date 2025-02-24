<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['mensagem'])) {

        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];

        cadastrar_mensagem($nome, $mensagem);
    }
}
?>
<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['confirma_senha'])) {

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $confirma = $_POST['confirma_senha'];

        if ($senha ===  $confirma) {
            cadastrar_usuario($nome, $senha);
        } 

        else{
            echo "<script>alert('As senhas devem ser iguais'); history.back();</script>";
            exit();
        }
  
    }

}
?>
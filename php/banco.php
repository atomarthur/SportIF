<?php
include 'config.php';

function cadastrar_usuario($nome, $senha)
{
    //Teste
    $conn = conectar();
    $sql = "INSERT INTO  usuario(nome, senha) VALUES (:NOME, :SENHA)";

    $instrucao = $conn->prepare($sql);

    $instrucao->bindParam(":NOME",$nome);
    $instrucao->bindParam(":SENHA",$senha);

    $instrucao->execute();
    header('Location:../html/inicial.html');
}

?>

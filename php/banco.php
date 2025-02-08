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
    header('Location:../php/inicial.php');
    exit();
}

function cadastrar_time($nome, $sigla, $nomeModalidade, $medalhasBronze, $medalhasPrata, $medalhasOuro)
{

    $conn = conectar();

    $sql = "SELECT id_modalidade FROM modalidades WHERE nome = :NOME_MODALIDADE";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":NOME_MODALIDADE", $nomeModalidade);
    $stmt->execute();

    $modalidade = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$modalidade) {
        die("Erro: Modalidade '$nomeModalidade' não encontrada!");
    }

    $id_modalidade = $modalidade['id_modalidade'];

    $sql = "INSERT INTO  equipes (nome, sigla, id_modalidade, medalhas_bronze, medalhas_prata, medalhas_ouro) VALUES (:NOME,:SIGLA,:ID_MODALIDADE,:MEDALHASBRONZE, :MEDALHASPRATA, :MEDALHASOURO)";

    $instrucao = $conn->prepare($sql);

    $instrucao->bindParam(":NOME",$nome);
    $instrucao->bindParam(":SIGLA",$sigla);
    $instrucao->bindParam(":ID_MODALIDADE",$id_modalidade);
    $instrucao->bindParam(":MEDALHASBRONZE",$medalhasBronze);
    $instrucao->bindParam(":MEDALHASPRATA", $medalhasPrata);
    $instrucao->bindParam(":MEDALHASOURO", $medalhasOuro);

    $instrucao->execute();
    header('Location:inicial.php');
    exit();
}
?>

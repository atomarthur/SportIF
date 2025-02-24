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
    header('Location:../php/index.php');
    exit();
}

function cadastrar_time($nome, $sigla, $nomeModalidade, $medalhasBronze, $medalhasPrata, $medalhasOuro)
{

    $conn = conectar();

    $sql = "SELECT id_modalidade FROM modalidades WHERE nome = :NOME_MODALIDADE";
    $instrucao = $conn->prepare($sql);
    $instrucao->bindParam(":NOME_MODALIDADE", $nomeModalidade);
    $instrucao->execute();

    $modalidade = $instrucao->fetch(PDO::FETCH_ASSOC);

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

function mostrar_classificacao(){

    $conn = conectar();
    $sql = "SELECT equipes.*, modalidades.nome AS nome_modalidade FROM equipes INNER JOIN modalidades ON equipes.id_modalidade = modalidades.id_modalidade ORDER BY medalhas_ouro DESC, medalhas_prata DESC, medalhas_bronze DESC;";
    $instrucao = $conn->prepare($sql);
    $instrucao->execute();
    
    $result = $instrucao->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}  

function mostrar_jogos(){
    $conn = conectar();
    $sql = "SELECT jogos.id, equipe_a.nome AS equipe_a, equipe_b.nome AS equipe_b, modalidades.nome AS nome_modalidade, jogos.placar_equipe_a, jogos.placar_equipe_b, jogos.status_jogo FROM jogos JOIN equipes AS equipe_a ON jogos.equipe_a_id = equipe_a.id_time JOIN equipes AS equipe_b ON jogos.equipe_b_id = equipe_b.id_time JOIN modalidades ON jogos.modalidade_id = modalidades.id_modalidade;";
   
    $instrucao = $conn->prepare($sql);
    $instrucao->execute();

    $jogos = $instrucao->fetchAll(PDO::FETCH_ASSOC);

    return $jogos;

}

function cadastrar_jogo($id_modalidade, $equipe_a, $equipe_b, $status_jogo) {
    $conn = conectar();
    
    if ($equipe_a === $equipe_b) {
        die("Erro: As equipes A e B devem ser diferentes.");
    }

    $sql = "INSERT INTO jogos (modalidade_id, equipe_a_id, equipe_b_id, status_jogo) 
            VALUES (:ID_MODALIDADE, :EQUIPE_A, :EQUIPE_B, :STATUS_JOGO)";

    $instrucao = $conn->prepare($sql);

    $instrucao->bindParam(":ID_MODALIDADE", $id_modalidade);
    $instrucao->bindParam(":EQUIPE_A", $equipe_a);
    $instrucao->bindParam(":EQUIPE_B", $equipe_b);
    $instrucao->bindParam(":STATUS_JOGO", $status_jogo);

    $instrucao->execute();

    header('Location: inicial.php');
    exit();
}

function atualizar_placar($id_jogo, $placar_a, $placar_b){

    $conn = conectar();

    $sql = "UPDATE jogos SET placar_equipe_a = :placar_a, placar_equipe_b = :placar_b WHERE id = :id_jogo";
    $instrucao = $conn->prepare($sql);
    $instrucao->bindParam(':placar_a', $placar_a);
    $instrucao->bindParam(':placar_b', $placar_b);
    $instrucao->bindParam(':id_jogo', $id_jogo);
        
    $instrucao->execute();
    $retorno = $instrucao->execute(); 

    if($retorno){
        header('Location:inicial.php');
    }
    else{
        echo "Erro ao atualizar o jogo";
    }

    header('Location: inicial.php');
    exit();

}

function obter_jogo_por_id($id_jogo){
    $conn = conectar();

    $sql = "SELECT equipe_a.nome AS equipe_a, equipe_b.nome AS equipe_b FROM jogos JOIN equipes AS equipe_a ON jogos.equipe_a_id = equipe_a.id_time JOIN equipes AS equipe_b ON jogos.equipe_b_id = equipe_b.id_time WHERE id = :ID_JOGO";
    $instrucao = $conn->prepare($sql);
    $instrucao->bindParam(':ID_JOGO', $id_jogo);

    $instrucao->execute();

    $jogo = $instrucao->fetch(PDO::FETCH_ASSOC);

    return $jogo;
}

function adicionarNotificacao($titulo, $mensagem){
    $conn = conectar();
    $sql = "INSERT INTO notificacoes(titulo, mensagem) VALUES (:TITULO, :MENSAGEM)";
    $instrucao = $conn->prepare($sql);

    $instrucao->bindParam(":TITULO",$titulo);
    $instrucao->bindParam(":MENSAGEM",$mensagem);

    $instrucao->execute();

}

function mostrar_notificacoes(){
    $conn = conectar();
    $sql = "SELECT titulo, mensagem FROM notificacoes ORDER BY id DESC LIMIT 4"; 
    $instrucao = $conn->prepare($sql);
    $instrucao->execute();
    
    $result = $instrucao->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function obter_nome_equipe($id_equipe) {
    $conn = conectar();
    $sql = "SELECT nome FROM equipes WHERE id_time = :ID";
    $instrucao = $conn->prepare($sql);
    $instrucao->bindParam(':ID', $id_equipe, PDO::PARAM_INT);
    $instrucao->execute();
    
    $resultado = $instrucao->fetch(PDO::FETCH_ASSOC);
    
    return $resultado ? $resultado['nome'] : 'Equipe Desconhecida';
}

function cadastrar_estatistica($id_jogo, $estatistica, $valor){
    $conn = conectar();
    $sql = "INSERT INTO estatisticas (id_jogo, estatistica_nome, valor) VALUES (:id_jogo, :estatistica, :valor)";
    $instrucao = $conn->prepare($sql);
    $instrucao->bindParam(':id_jogo', $id_jogo, PDO::PARAM_INT);
    $instrucao->bindParam(':estatistica', $estatistica, PDO::PARAM_STR);
    $instrucao->bindParam(':valor', $valor, PDO::PARAM_INT);


    $instrucao->execute();
    header('Location:inicial.php');
    exit();
}

function obter_estatisticas() {
    $conn = conectar();
    $sql = "SELECT e.id_jogo, e.estatistica_nome, e.valor, eq1.nome AS equipe_a, eq2.nome AS equipe_b FROM estatisticas e JOIN jogos j ON e.id_jogo = j.id JOIN equipes eq1 ON j.equipe_a_id = eq1.id_time JOIN equipes eq2 ON j.equipe_b_id = eq2.id_time ORDER BY id_jogo" ;
    
    $instrucao = $conn->prepare($sql);
    $instrucao->execute();

    $retorno = $instrucao->fetchAll(PDO::FETCH_ASSOC);
    
    return $retorno;
}

function cadastrar_mensagem($nome, $mensagem){
    $conn = conectar();
    $sql = "INSERT INTO mensagem (nome, mensagem) VALUES (:NOME, :MENSAGEM)";
    $instrucao = $conn->prepare($sql);
    $instrucao->bindParam(':NOME', $nome, PDO::PARAM_STR);
    $instrucao->bindParam(':MENSAGEM', $mensagem, PDO::PARAM_STR);

    $instrucao->execute();
    header('Location:inicial.php');
    exit();
}

function obter_mensagem(){
    $conn = conectar();
    $sql = "SELECT * FROM mensagem";
    
    $instrucao = $conn->prepare($sql);
    $instrucao->execute();

    $retorno = $instrucao->fetchAll(PDO::FETCH_ASSOC);
    
    return $retorno;
}

?>

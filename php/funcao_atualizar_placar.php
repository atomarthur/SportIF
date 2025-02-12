<?php

include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_jogo = $_POST['id_jogo'];
    $placar_a = $_POST['placar_a'];
    $placar_b = $_POST['placar_b'];

    // Chamando a função para atualizar o placar no banco de dados
    atualizar_placar($id_jogo, $placar_a, $placar_b);
}

?>
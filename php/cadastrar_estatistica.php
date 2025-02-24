<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_jogo'], $_POST['estatistica'], $_POST['valor'])) {
        $id_jogo = $_POST['id_jogo'];
        $estatistica = $_POST['estatistica'];
        $valor = $_POST['valor'];

        cadastrar_estatistica($id_jogo, $estatistica, $valor);
    }
}
?>

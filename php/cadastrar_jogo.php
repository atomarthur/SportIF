<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['modalidade']) && isset($_POST['equipe_a']) && isset($_POST['equipe_b']) && isset($_POST['status_jogo'])) {

        $modalidadeId = $_POST['modalidade'];
        $equipeA = $_POST['equipe_a'];
        $equipeB = $_POST['equipe_b'];
        $statusJogo = $_POST['status_jogo'];

        if ($equipeA == $equipeB) {
            echo "<script>alert('As equipes não podem ser iguais!'); history.back();</script>";
            exit();
        }

        cadastrar_jogo($modalidadeId, $equipeA, $equipeB, $statusJogo);
    }
}
?>

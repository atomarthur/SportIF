<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nomeTime'])) {

        $nomeTime = $_POST['nomeTime'];
        $siglaTime = $_POST['siglaTime'];
        $modalidade = $_POST['modalidade'];
        $medalhasBronze = $_POST['medalhasBronze'];
        $medalhasPrata = $_POST['medalhasPrata'];
        $medalhasOuro = $_POST['medalhasOuro'];

        cadastrar_time($nomeTime, $siglaTime, $modalidade, $medalhasBronze, $medalhasPrata, $medalhasOuro);
    }
}
?>
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

        $nomeEquipeA = obter_nome_equipe($equipeA);
        $nomeEquipeB = obter_nome_equipe($equipeB);

        switch ($statusJogo) {
            case 'Em Andamento':
                adicionarNotificacao("Acaba de começar!", "Jogo entre ". $nomeEquipeA . " e " . $nomeEquipeB . " em andamento");
                break;
            
            case 'Finalizado':
                adicionarNotificacao("Fim de jogo!", "Jogo entre ". $nomeEquipeA . " e " . $nomeEquipeB . " finalizado");
                break;

            case 'Agendado':
                adicionarNotificacao("Jogo marcado!", "Jogo entre ". $nomeEquipeA . " e " . $nomeEquipeB . " irá acontecer");
                break;
        }

        cadastrar_jogo($modalidadeId, $equipeA, $equipeB, $statusJogo);

        
    
    }
}
?>

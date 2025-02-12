let placarTimeA = 0;
let placarTimeB = 0;

function atualizarPlacar(time, acao) {
    let placarInputA = document.getElementById('placar_a');
    let placarInputB = document.getElementById('placar_b');

    if (time === 'a') {
        if (acao === 'incrementar') {
            placarTimeA++;
        } else if (acao === 'decrementar' && placarTimeA > 0) {
            placarTimeA--;
        }
        document.getElementById('time-a-placar').innerText = placarTimeA;
        placarInputA.value = placarTimeA; // Atualiza o input hidden
    } else if (time === 'b') {
        if (acao === 'incrementar') {
            placarTimeB++;
        } else if (acao === 'decrementar' && placarTimeB > 0) {
            placarTimeB--;
        }
        document.getElementById('time-b-placar').innerText = placarTimeB;
        placarInputB.value = placarTimeB; // Atualiza o input hidden
    }
}

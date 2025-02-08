let placarTimeA = 0;
let placarTimeB = 0;

function atualizarPlacar(time, acao) {
    if (time === 'a') {
        if (acao === 'incrementar') {
            placarTimeA++;
        } else if (acao === 'decrementar' && placarTimeA > 0) {
            placarTimeA--;
        }
        document.getElementById('time-a-placar').innerText = placarTimeA;
    } else if (time === 'b') {
        if (acao === 'incrementar') {
            placarTimeB++;
        } else if (acao === 'decrementar' && placarTimeB > 0) {
            placarTimeB--;
        }
        document.getElementById('time-b-placar').innerText = placarTimeB;
    }
}

function reiniciarPlacar() {
    placarTimeA = 0;
    placarTimeB = 0;
    document.getElementById('time-a-placar').innerText = placarTimeA;
    document.getElementById('time-b-placar').innerText = placarTimeB;
}

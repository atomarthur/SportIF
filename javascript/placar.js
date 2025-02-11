// Função para atualizar o placar de um time
function atualizarPlacar(time, acao) {
    // Identificando o elemento de placar correspondente ao time
    var placarElement = document.getElementById('time-' + time + '-placar');
    var placar = parseInt(placarElement.textContent);
    
    // Modificando o placar conforme a ação (incrementar ou decrementar)
    if (acao === 'incrementar') {
        placar++;
    } else if (acao === 'decrementar' && placar > 0) {
        placar--;
    }

    // Atualizando o placar na tela
    placarElement.textContent = placar;

    // Atualizando os valores dos inputs escondidos para envio no formulário
    if (time === 'a') {
        document.getElementById('placar_a_input').value = placar;
    } else if (time === 'b') {
        document.getElementById('placar_b_input').value = placar;
    }
}

// Função para reiniciar o placar
function reiniciarPlacar() {
    // Resetando os placares na tela
    document.getElementById('time-a-placar').textContent = "0";
    document.getElementById('time-b-placar').textContent = "0";

    // Resetando os valores dos inputs escondidos
    document.getElementById('placar_a_input').value = "0";
    document.getElementById('placar_b_input').value = "0";
}
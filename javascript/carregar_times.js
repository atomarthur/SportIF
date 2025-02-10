document.addEventListener("DOMContentLoaded", function () {
    const modalidadeSelect = document.getElementById("modalidade");
    const equipeASelect = document.getElementById("equipe_a");
    const equipeBSelect = document.getElementById("equipe_b");

    // Inicialmente desabilita os campos de equipe até que uma modalidade seja selecionada
    equipeASelect.disabled = true;
    equipeBSelect.disabled = true;

    modalidadeSelect.addEventListener("change", function () {
        filtrarTimes();
    });

    function filtrarTimes() {
        const modalidadeId = modalidadeSelect.value;

        // Limpar as opções de equipes anteriores
        equipeASelect.innerHTML = '<option value="">Selecione a Equipe A</option>';
        equipeBSelect.innerHTML = '<option value="">Selecione a Equipe B</option>';

        // Verificar se uma modalidade foi selecionada
        if (!modalidadeId) {
            return; // Não faz nada se não houver modalidade selecionada
        }

        console.log("Modalidade selecionada:", modalidadeId);

        // Adicionar as equipes da modalidade selecionada
        equipes.forEach(equipe => {
            if (parseInt(equipe.id_modalidade) === parseInt(modalidadeId)) {
                let optionA = new Option(equipe.nome, equipe.id_time);
                let optionB = new Option(equipe.nome, equipe.id_time);
                equipeASelect.add(optionA);
                equipeBSelect.add(optionB);
            }
        });

        // Habilitar os campos de equipe após carregar as opções
        equipeASelect.disabled = false;
        equipeBSelect.disabled = false;
    }
});

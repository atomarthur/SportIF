document.addEventListener("DOMContentLoaded", function () {
    const modalidadeSelect = document.getElementById("modalidade");
    const jogoSelect = document.getElementById("jogo");

    modalidadeSelect.addEventListener("change", function () {
        const modalidadeSelecionada = modalidadeSelect.value;
        jogoSelect.innerHTML = '<option value="">Selecione um jogo</option>';

        jogos.forEach(jogo => {
            if (jogo.nome_modalidade === modalidadeSelecionada) {
                const option = document.createElement("option");
                option.value = jogo.id;
                option.textContent = `${jogo.id}. ${jogo.equipe_a} x ${jogo.equipe_b}`;
                jogoSelect.appendChild(option);
            }
        });
    });
});

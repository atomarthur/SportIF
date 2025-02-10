function carregar_times() {
    const modalidadeId = document.getElementById("modalidade").value;
    
    if (!modalidadeId) return;

    // Usando AJAX (Fetch API)
    fetch(`carregar_times.php?modalidade_id=${modalidadeId}`)
        .then(response => response.json())
        .then(data => {
            // Limpar os selects de equipes
            const equipeASelect = document.getElementById("equipe_a");
            const equipeBSelect = document.getElementById("equipe_b");

            equipeASelect.innerHTML = "<option value='' disabled selected>Selecione a Equipe A</option>";
            equipeBSelect.innerHTML = "<option value='' disabled selected>Selecione a Equipe B</option>";

            // Adicionar novas opções
            data.forEach(time => {
                equipeASelect.innerHTML += `<option value='${time.id_time}'>${time.nome}</option>`;
                equipeBSelect.innerHTML += `<option value='${time.id_time}'>${time.nome}</option>`;
            });
        })
        .catch(error => console.error("Erro ao carregar os times:", error));
}

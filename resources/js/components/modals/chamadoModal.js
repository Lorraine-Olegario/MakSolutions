document.getElementById('chamadoLink').addEventListener('click', function(event) {
    event.preventDefault();
    $('#chamadoModal').modal('show');
});

document.getElementById('sendChamadoWhatsApp').addEventListener('click', function(event) {
    event.preventDefault();
    const razaoSocial = encodeURIComponent(document.getElementById('razaoSocialChamado').value).trim();
    const numeroSerie = encodeURIComponent(document.getElementById('numeroSerieChamado').value).trim();
    const contatoNome = encodeURIComponent(document.getElementById('contatoNomeChamado').value).trim();
    const contatoSetor = encodeURIComponent(document.getElementById('contatoSetorChamado').value).trim();
    const tipoChamado = encodeURIComponent(document.getElementById('tipoChamado').value).trim();
    const descricao = encodeURIComponent(document.getElementById('descricaoChamado').value).trim();

    if (!razaoSocial || !numeroSerie || !contatoNome || !contatoSetor || !tipoChamado) {
        alert('Por favor, preencha todos os campos obrigatórios.');
        return false;
    }

    const maxDescricaoLength = 300;
    if (descricao.length > maxDescricaoLength) {
        alert(`A descrição foi truncada para ${maxDescricaoLength} caracteres.`);
        return false;
    }

    const whatsappURL = `https://api.whatsapp.com/send?phone=${whatsapp}&text=Olá%2C%20gostaria%20de%20abrir%20uma%20ordem%20de%20serviço%20para%20um%20equipamento%2C%20seguem%20os%20dados%3A%0A%0A*Razão%20Social*%3A%20${razaoSocial}%0A*Nº%20Série*%3A%20${numeroSerie}%0A*Contato*%0A%2D%20*Nome*%3A%20${contatoNome}%0A%2D%20*Setor*%3A%20${contatoSetor}%0A%0A*Tipo%20de%20Chamado*%3A%20${tipoChamado}%0A*Descrição*%3A%20${descricao}`;
    window.open(whatsappURL, '_blank');
});

$('#chamadoModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});

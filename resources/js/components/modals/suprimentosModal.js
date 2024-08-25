document.getElementById('suprimentosLink').addEventListener('click', function(event) {
    event.preventDefault();
    $('#suprimentosModal').modal('show');
});

document.getElementById('sendWhatsApp').addEventListener('click', function() {

    event.preventDefault();
    const razaoSocial = encodeURIComponent(document.getElementById('razaoSocial').value);
    const numeroSerie = encodeURIComponent(document.getElementById('numeroSerie').value);
    const contatoNome = encodeURIComponent(document.getElementById('contatoNome').value);
    const contatoSetor = encodeURIComponent(document.getElementById('contatoSetor').value);
    const suprimento = encodeURIComponent(document.getElementById('suprimento').value);
    const descricao = encodeURIComponent(document.getElementById('descricao').value);

    if (!razaoSocial || !numeroSerie || !contatoNome || !contatoSetor || !suprimento) {
        alert('Por favor, preencha todos os campos obrigatórios.');
        return false;
    }

    const whatsappURL = `https://api.whatsapp.com/send?phone=${whatsapp}&text=Olá%2C%20gostaria%20de%20solicitar%20um%20suprimento%20para%20a%20empresa.%20Por%20favor%2C%20encontre%20abaixo%20as%20informações%20detalhadas%20para%20processamento%20do%20pedido.%0A%0A*Razão%20Social*%3A%20${razaoSocial}%0A*Nº%20Série*%3A%20${numeroSerie}%0A*Contato*%0A%2D%20*Nome*%3A%20${contatoNome}%0A%2D%20*Setor*%3A%20${contatoSetor}%0A%0A*Tipo%20de%20Suprimento*%3A%20${suprimento}%0A*Descrição*%3A%20${descricao}`;
    window.open(whatsappURL, '_blank');
});

$('#suprimentosModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});

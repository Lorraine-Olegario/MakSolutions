<!-- Modal HTML -->
<div class="modal fade" id="suprimentosModal" tabindex="-1" role="dialog" aria-labelledby="suprimentosModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="suprimentosModalLabel">Formulário de Suprimentos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formSuprimentos">
                    <div class="form-group">
                        <label for="razaoSocial">Razão Social <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="razaoSocial" placeholder="Razão Social" required>
                    </div>
                    <div class="form-group">
                        <label for="numeroSerie">Número de Série Equipamento <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="numeroSerie" placeholder="Número de Série" required>
                    </div>
                    <div class="form-group">
                        <label for="contatoNome">Nome <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="contatoNome" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <label for="contatoSetor">Setor <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="contatoSetor" placeholder="Setor" required>
                    </div>
                    <div class="form-group">
                        <label for="suprimento">Suprimento <span class="mandatory">*</span></label>
                        <select class="form-control" id="suprimento" required>
                            <option value="Toner">Toner</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" id="descricao" rows="3" placeholder="Informe o modelo do equipamento"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="sendWhatsApp">Enviar pelo WhatsApp</button>
            </div>
        </div>
    </div>
</div>

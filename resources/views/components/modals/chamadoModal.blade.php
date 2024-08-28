<!-- Modal HTML -->
<div class="modal fade" id="chamadoModal" tabindex="-1" role="dialog" aria-labelledby="chamadoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chamadoModalLabel">Formulário de Chamado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formChamado">
                    <div class="form-group">
                        <label for="razaoSocialChamado">Razão Social <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="razaoSocialChamado" placeholder="Razão Social" required>
                    </div>
                    <div class="form-group">
                        <label for="numeroSerieChamado">Número de Série Equipamento <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="numeroSerieChamado" placeholder="Número de Série" required>
                    </div>
                    <div class="form-group">
                        <label for="contatoNomeChamado">Nome <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="contatoNomeChamado" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <label for="contatoSetorChamado">Setor <span class="mandatory">*</span></label>
                        <input type="text" class="form-control" id="contatoSetorChamado" placeholder="Setor" required>
                    </div>
                    <div class="form-group">
                        <label for="tipoChamado">Tipo de Chamado <span class="mandatory">*</span></label>
                        <select class="form-control" id="tipoChamado" required>
                            <option value="suporte">Abertura OS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descricaoChamado">Descrição</label>
                        <textarea class="form-control" id="descricaoChamado" rows="3" placeholder="Informe a descrição do chamado"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="sendChamadoWhatsApp">Enviar pelo WhatsApp</button>
            </div>
        </div>
    </div>
</div>

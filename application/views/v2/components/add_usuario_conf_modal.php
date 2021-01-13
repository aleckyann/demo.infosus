<!-- Modal add_usuario_conf_modal-->
<div class="modal fade" id="add_usuario_conf_modal" tabindex="-1" role="dialog" aria-labelledby="add_usuario_conf_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_usuario_conf_label"><i class="fas fa-user-edit"></i> Adicionar Usuário</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/usuarios/novo') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="usuario_nome" type="text" placeholder="Nome do usuário" required />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Telefone (whatsapp)</label>
                            <input class="form-control" name="usuario_telefone" type="text" data-mask="(00) 00000-0000"  placeholder="Número do (whatsapp)" required />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Tipo de acesso</label>
                            <select name="usuario_nivel" class="form-select" required>
                                <option value="gestão">Gestão</option>
                                <option value="regulação">Regulação</option>
                                <option value="transportes">Transportes</option>
                                <option value="almoxarifado">Almoxarifado</option>
                                <option value="casa de apoio">Casa de apoio</option>
                            </select>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Email de acesso</label>
                            <input class="form-control" name="usuario_email" type="text" placeholder="Login de acesso ao infosus" required />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Senha de acesso</label>
                            <input class="form-control" name="usuario_password" type="number" placeholder="Senha de acesso ao infosus" required />
                        </div>
                        <p class="small text-primary mt-5"><i class="fas fa-info-circle"></i> Os dados serão enviados ao whatsapp do usuário como lembrete.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let add_usuario_conf_modal = new bootstrap.Modal(document.getElementById('add_usuario_conf_modal'))
    });
</script>
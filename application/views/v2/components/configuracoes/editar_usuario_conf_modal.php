<!-- Modal editar_usuario_conf_modal-->
<div class="modal fade" id="editar_usuario_conf_modal" tabindex="-1" role="dialog" aria-labelledby="editar_usuario_conf_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title font-weight-light text-white" id="editar_usuario_conf_label"><i class="fas fa-user-edit"></i> Editar Usuário</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/usuarios/editar') ?>" id="editar_usuario_form" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" id="editar_usuario_conf_id" name="usuario_id">
                    <div class="row">
                        <div class="mb-2 col-lg-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" id="editar_usuario_conf_nome" name="usuario_nome" type="text" placeholder="Nome do usuário" required />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Telefone (whatsapp)</label>
                            <input class="form-control" id="editar_usuario_conf_telefone" name="usuario_telefone" type="text" data-mask="(00) 00000-0000" placeholder="Número do (whatsapp)" required />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Tipo de acesso</label>
                            <select id="editar_usuario_conf_nivel" name="usuario_nivel" class="form-select" required>
                                <option value="gestão">Gestão</option>
                                <option value="regulação">Regulação</option>
                                <option value="transportes">Transportes</option>
                                <option value="almoxarifado">Almoxarifado</option>
                                <option value="casa de apoio">Casa de apoio</option>
                            </select>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Email de acesso</label>
                            <input class="form-control" id="editar_usuario_conf_email" name="usuario_email" type="text" placeholder="Email de acesso"/>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Senha de acesso</label>
                            <input class="form-control" id="editar_usuario_conf_password" name="usuario_password" type="text" placeholder="Senha de acesso" />
                        </div>
                        <p class="small text-primary mt-5"><i class="fas fa-info-circle"></i> Mantenha o campo SENHA DE ACESSO em branco para manter a senha atual.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="editar_usuario_submit_button" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
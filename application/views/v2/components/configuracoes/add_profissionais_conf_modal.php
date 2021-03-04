<!-- Modal add_profissionais_conf_modal-->
<div class="modal fade" id="add_profissionais_conf_modal" role="dialog" aria-labelledby="add_profissionais_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_profissionais_label"><i class="fas fa-user-md"></i> Adicionar novo profissional</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/profissionais/novo') ?>" id="add_profissionais_conf_form" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-12">
                            <label for="">Nome do profissional</label>
                            <input type="text" class="form-control" name="profissional_nome" placeholder="Informe o nome do profissional" required>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="add_profissionais_conf_submit_button" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
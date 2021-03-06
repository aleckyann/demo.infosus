<!-- Modal add_cotas_conf_modal-->
<div class="modal fade" id="add_cotas_conf_modal" role="dialog" aria-labelledby="add_municipio_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_municipio_label"><i class="fas fa-ticket-alt"></i> Adicionar nova cota/convênio</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/cotas/novo') ?>" id="add_cotas_conf_form" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-12">
                            <label for="">Nome da cota</label>
                            <input type="text" class="form-control" name="cota_nome" placeholder="Informe o nome do estoque" required>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="add_cotas_conf_submit_button" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal editar_casa_de_apoio_modal-->
<div class="modal fade" id="editar_casa_de_apoio_modal" tabindex="-1" role="dialog" aria-labelledby="editar_casa_de_apoio_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title font-weight-light text-white" id="editar_casa_de_apoio_label"><i class="fas fa-house-user"></i> Editar registros da casa de apoio</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/casa-de-apoio/editar-registro') ?>" id="editar_casa_de_apoio_form" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">
                        <input type="hidden" name="apoio_id" id="apoio_id">
                        <div class="mb-2 col-12">
                            <label for="#nome_paciente">Nome do paciente</label>
                            <input type="text" class="form-control disabled" id="nome_paciente" readonly>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Data de entrada</label>
                            <input type="date" name="data_entrada" id="data_entrada" class="form-control" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Previsão de saída</label>
                            <input type="date" name="data_saida" id="data_saida" class="form-control">
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Observações ou justificativa</label>
                            <textarea type="date" name="observacao" id="observacao" class="form-control"></textarea>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="editar_casa_de_apoio_submit_button" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

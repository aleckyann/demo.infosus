<!-- Modal negar_tfd_modal-->
<div class="modal fade" id="negar_tfd_modal" tabindex="-1" role="dialog" aria-labelledby="negar_tfd_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title font-weight-light text-white" id="negar_tfd_label"><i class="fas fa-laptop-medical"></i> Negar TFD</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/tfd/negar') ?>" method="post">
                <?= $csrf_input ?>
                <div class="modal-body">
                    <input type="hidden" name="tfd_id" id="negar_tfd_id">
                    <div class="row">
                        <div class="mb-2 col-12">
                            <label for="">Motivo ou justificativa</label>
                            <textarea class="form-control" name="tfd_negado_por" required></textarea>
                        </div>
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
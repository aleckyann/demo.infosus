<!-- Modal negar_procedimento_modal-->
<div class="modal fade" id="negar_procedimento_modal" tabindex="-1" role="dialog" aria-labelledby="negar_procedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title font-weight-light text-white" id="negar_procedimento_label"><i class="fas fa-calendar-times"></i> Negar procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/negar') ?>" id="negar_procedimento_form" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="procedimentos_id" id="negar_procedimentos_id">
                    <div class="row">
                        <div class="mb-2 col-12">
                            <label for="">Motivo ou justificativa</label>
                            <textarea class="form-control" name="negado_por" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="negar_procedimento_submit_button" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
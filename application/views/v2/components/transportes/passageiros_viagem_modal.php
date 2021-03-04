<!-- Modal passageiros_viagem_modal-->
<div class="modal fade" id="passageiros_viagem_modal" role="dialog" aria-labelledby="load_paciente_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="load_paciente_label"><i class="fas fa-users"></i> Passageiros</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/transportes/viagens/update-passageiros') ?>" id="passageiros_viagem_form" method="post">
                <input type="hidden" name="passageiro_viagem_id" id="passageiros_viagem_id">
                <?= $csrf_input ?>
                <div class="modal-body modal-scroll">
                    <div id="passageiros_viagem_content"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary btn-sm" id="passageiros_viagem_submit_button" type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
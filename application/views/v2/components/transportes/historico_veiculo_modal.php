<!-- Modal dados_viagem_modal-->
<div class="modal fade" id="dados_viagem_modal" role="dialog" aria-labelledby="dados_viagem_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="dados_viagem_label"><i class="fas fa-route"></i> Dados da viagem</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-scroll">
                <table class="table table-bordered mt-2">
                    <thead class="bg-light">
                        <th class="font-weight-light text-dark">PACIENTE / PASSAGEIRO</th>
                    </thead>
                    <tbody id="load_dados_viagem">
                    </tbody>
                </table>
            </div>

        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Fechar</button>
        </div>
    </div>
</div>
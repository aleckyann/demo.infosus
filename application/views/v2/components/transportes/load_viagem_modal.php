<!-- Modal load_viagem_modal-->
<div class="modal fade" id="load_viagem_modal" role="dialog" aria-labelledby="load_paciente_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="load_paciente_label"><i class="fas fa-route"></i> Dados da viagem</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-scroll">
                <div class="row">
                    <div class="col-lg-6"><b>Origem:</b> <span class="font-weight-light" id="load_viagem_origem"></span></div>
                    <div class="col-lg-6"><b>Destino:</b> <span class="font-weight-light" id="load_viagem_destino"></span></div>
                    <div class="col-lg-6"><b>Data:</b> <span class="font-weight-light" id="load_viagem_data"></span></div>
                    <div class="col-lg-6"><b>Veiculo:</b> <span class="font-weight-light" id="load_viagem_veiculo"></span></div>
                </div>
                <hr>
                <table class="table table-bordered mt-2">
                    <thead class="bg-light">
                        <th class="font-weight-light text-dark">PACIENTE / PASSAGEIRO</th>
                    </thead>
                    <tbody id="load_viagem_content"></tbody>
                </table>
            </div>

        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Fechar</button>
        </div>
    </div>
</div>
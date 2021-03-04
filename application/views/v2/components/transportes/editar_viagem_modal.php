<!-- Modal editar_viagem_modal-->
<div class="modal fade" id="editar_viagem_modal" role="dialog" aria-labelledby="editar_viagem_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title font-weight-light text-white" id="editar_viagem_label"><i class="fas fa-route"></i> Editar viagem</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/transportes/viagens/editar') ?>" id="editar_viagem_form" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">
                        <input type="hidden" name="viagem_id" id="editar_viagem_id">
                        <div class="mb-2 col-6">
                            <label for="" class="text-warning">CIDADE DE ORIGEM</label>
                            <input type="text" id="editar_viagem_origem" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="" class="text-warning">CIDADE DE DESTINO</label>
                            <input type="text" id="editar_viagem_destino" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="" class="text-warning">VEÍCULO</label>
                            <select id="editar_viagem_veiculo" class="form-select" disabled>
                                <?php foreach ($this->Veiculos->getAll() as $v) { ?>
                                    <option value="<?= $v['veiculo_id'] ?>"><?= $v['veiculo_marca'] . ': ' . $v['veiculo_placa'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">DATA DA VIAGEM</label>
                            <input type="date" id="editar_viagem_data" name="viagem_data" class="form-control" required>
                        </div>
                        <p class="small text-primary mt-5"><i class="fas fa-info-circle"></i> Não é possivel mudar o veículo da viagem. Mas você pode cancelar esta viagem e criar com o veículo desejado.</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="editar_viagem_submit_button" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
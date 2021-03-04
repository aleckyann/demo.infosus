<!-- Modal add_veiculo_modal-->
<div class="modal fade" id="add_veiculo_modal" tabindex="-1" role="dialog" aria-labelledby="add_veiculo_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_veiculo_modal_label"><i class="fas fa-car-side"></i> Adicionar veículo</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/transportes/veiculos/novo') ?>" id="add_veiculo_form" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-8">
                            <label class="form-label">Marca</label>
                            <input class="form-control" name="veiculo_marca" type="text" placeholder="Marca do veículo" required/>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Ano</label>
                            <input class="form-control" name="veiculo_ano" type="number" placeholder="Ano do veículo" required/>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Tipo</label>
                            <input class="form-control" name="veiculo_tipo" type="text" placeholder="Tipo de veículo" required/>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Placa</label>
                            <input class="form-control" name="veiculo_placa" type="text" placeholder="Placa do veículo" required/>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Vagas</label>
                            <input class="form-control" name="veiculo_vagas" type="number" placeholder="Número de vagas do veículo" required/>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="add_veiculo_submit_button" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
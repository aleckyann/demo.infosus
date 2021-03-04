<!-- Modal add_viagem_modal-->
<div class="modal fade" id="add_viagem_modal" role="dialog" aria-labelledby="add_viagem_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_viagem_label"><i class="fas fa-route"></i> Adicionar nova viagem</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/transportes/viagens/novo') ?>" id="add_viagem_form" method="post">
                <?= $csrf_input ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-2 col-6">
                            <label for="">CIDADE DE ORIGEM</label>
                            <select name="viagem_origem" class="add_cidade_viagem_select2" name="viagem_origem" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">CIDADE DE DESTINO</label>
                            <select name="viagem_destino" class="add_cidade_viagem_select2" name="viagem_destino" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">DATA DA VIAGEM</label>
                            <input type="date" name="viagem_data" class="form-control" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">VEÍCULO</label>
                            <select name="viagem_veiculo_id" class="form-select" required>
                                <option value="" disabled selected required>SELECIONE UM VEÍCULO</option>
                                <?php foreach ($this->Veiculos->getAll() as $v) { ?>
                                    <option value="<?= $v['veiculo_id'] ?>"><?= $v['veiculo_marca'] . ': ' . $v['veiculo_placa'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="add_viagem_submit_button" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    //Cria modal para editar paciente
    // var add_viagem_modal = new bootstrap.Modal(document.getElementById('add_viagem_modal'));
    $('#add_viagem_form').on('submit', function() {
        $('#add_viagem_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
    })

    $(document).ready(function() {
        var add_cidade_viagem_select2 = $('.add_cidade_viagem_select2').select2({
            ajax: {
                url: '<?= base_url('v2/api/municipios/json') ?>',
                method: 'POST',
                data: function(params) {
                    var query = {
                        nome_municipio: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }
                    return query;
                },
                processResults: function(data, params) {
                    return {
                        results: data
                    }
                },
                dataType: 'json',
                placeholder: "Selecione um paciente",
            },
            delay: 250,
            minimumInputLength: 1,
        });

    });
</script>
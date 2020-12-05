<!-- Modal novoCasaDeApoio-->
<div class="modal fade" id="novoCasaDeApoio" role="dialog" aria-labelledby="novoCasaDeApoioLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="novoCasaDeApoioLabel"><i class="fas fa-house-user"></i> Adicionar paciente na casa de apoio</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/casa-de-apoio/new') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-7">
                            <label for="">Nome do paciente</label>
                            <select id="pacientesCasaDeApoio_select2" style="width:100%" name="paciente_id" required></select>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Nascimento:</label>
                            <input type="date" id="disabledCasaDeApoioNascimento" class="form-control p-0" disabled>
                        </div>
                        <div class="mb-2 col-2">
                            <label for="">CPF:</label>
                            <input type="text" id="disabledCasaDeApoioCpf" class="form-control" disabled>
                        </div>
                        <hr>
                        <div class="mb-2 col-6">
                            <label for="">Data de entrada</label>
                            <input type="date" name="data_entrada" class="form-control" required>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Previsão de saída</label>
                            <input type="date" name="data_saida" class="form-control" required>
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Observações ou justificativa</label>
                            <textarea type="date" name="observacao" class="form-control"></textarea>
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

<script>
    //Cria modal para adição de pacientes na casa de apoio
    var novoCasaDeApoio = new bootstrap.Modal(document.getElementById('novoCasaDeApoio'), {
        keyboard: false
    })
    $(document).ready(function() {
        var casaDeApoio_select2 = $('#pacientesCasaDeApoio_select2').select2({
            ajax: {
                url: '<?= base_url('v2/pacientes/json/select2') ?>',
                method: 'POST',
                data: function(params) {
                    var query = {
                        nome_paciente: params.term,
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

        // Preenche Telefone e cpf
        casaDeApoio_select2.on('select2:select', function(e) {
            $('#disabledCasaDeApoioCpf').val(e.params.data.cpf)
            $('#disabledCasaDeApoioNascimento').val(e.params.data.nascimento)
        });
    });
</script>
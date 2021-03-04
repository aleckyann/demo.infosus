<!-- Modal add_casa_de_apoio_modal-->
<div class="modal fade" id="add_casa_de_apoio_modal" role="dialog" aria-labelledby="add_casa_de_apoio_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_casa_de_apoio_label"><i class="fas fa-house-user"></i> Adicionar paciente na casa de apoio</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/casa-de-apoio/novo') ?>" id="add_casa_de_apoio_form" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-7">
                            <label for="">Nome do paciente</label>
                            <select id="pacientesCasaDeApoio_select2" style="width:100%" name="paciente_id" required></select>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Nascimento:</label>
                            <input type="date" id="disabledCasaDeApoioNascimento" class="form-control p-0" disabled>
                        </div>
                        <div class="mb-2 col-lg-2">
                            <label for="">CPF:</label>
                            <input type="text" id="disabledCasaDeApoioCpf" class="form-control" disabled>
                        </div>
                        <hr>
                        <div class="mb-2 col-6lg-">
                            <label for="">Data de entrada</label>
                            <input type="date" name="data_entrada" class="form-control" required>
                        </div>
                        <div class="mb-2 col-lg-6">
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
                    <button class="btn btn-primary btn-sm" id="add_casa_de_apoio_submit_button" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    //Cria modal para adição de pacientes na casa de apoio
    var add_casa_de_apoio_modal = new bootstrap.Modal(document.getElementById('add_casa_de_apoio_modal'))

    $('#add_casa_de_apoio_form').on('submit', function() {
        $('#add_casa_de_apoio_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
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
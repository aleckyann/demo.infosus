<!-- Modal addTfd_modal-->
<div class="modal fade" id="addTfd_modal" role="dialog" aria-labelledby="AddTfd_label" aria-hidden="true">
    <div class="modal-dialog  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light text-dark" id="AddTfd_label"><i class="far fa-calendar-plus"></i> Adicionar novo TFD</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/tfd/novo') ?>" method="post" enctype="multipart/form-data">
                <?= $csrf_input ?>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-8">
                            <label for="">Nome do paciente:</label>
                            <select name="paciente_id" id="addTfdSelect2" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-2">
                            <label for="">Nascimento</label>
                            <input type="date" id="disabledTfdPacienteNascimento" class="form-control p-0" disabled>
                        </div>
                        <div class="mb-2 col-2">
                            <label for="">CPF</label>
                            <input type="text" id="disabledTfdPacienteCpf" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Procedimento</label>
                            <input type="text" name="estabelecimento_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Procedimento</label>
                            <input type="text" name="estabelecimento_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-12">
                            <label for="">Anexo</label>
                            <div class="form-file">
                                <input class="form-file-input" id="customFile" type="file" />
                                <label class="form-file-label" name="tfd_anexo" for="customFile">
                                    <span class="form-file-text">Escolha um arquivo...</span>
                                    <span class="form-file-button"><i class="fas fa-file-medical"></i> Procurar arquivo</span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Especialidade:</label>
                            <select name="especialidade" class="form-select" required>
                                <option selected disabled>Selecione uma especialidade</option>
                                <?php foreach ($this->Especialidades->getAll() as $e) : ?>
                                    <option value="<?= $e['especialidade_nome'] ?>"><?= $e['especialidade_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Estabelecimento solicitante:</label>
                            <input type="text" name="estabelecimento_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Profissional solicitante:</label>
                            <input type="text" name="profissional_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Data de entrada:</label>
                            <input type="date" name="data_solicitacao" class="form-control" required>
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Principais sintomas clínicos:</label>
                            <textarea type="date" name="sintomas" class="form-control"></textarea>
                        </div>

                        <div class="col-12 mt-1">
                            <label>Classificação de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="1" id="novoTfd1" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="novoTfd1"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="2" id="novoTfd2" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="novoTfd2"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="3" id="novoTfd3" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="novoTfd3"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="4" id="novoTfd4" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="btn-check-outlined3"><span class="m-2">4</span></label><br>Alta
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
    //Cria modal para editar paciente
    var addTfd_modal = new bootstrap.Modal(document.getElementById('addTfd_modal'), {
        keyboard: false
    })
    $(document).ready(function() {
        var tfdSelect2 = $('#addTfdSelect2').select2({
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
        tfdSelect2.on('select2:select', function(e) {
            $('#disabledTfdPacienteCpf').val(e.params.data.cpf)
            $('#disabledTfdPacienteNascimento').val(e.params.data.nascimento)
        });
    });
</script>
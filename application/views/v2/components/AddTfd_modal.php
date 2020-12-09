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
                        <div class="mb-3 col-6">
                            <label for="">Nome do paciente:</label>
                            <select name="paciente_id" id="addTfdSelect2" name="paciente_id" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Nascimento</label>
                            <input type="date" id="disabledTfdPacienteNascimento" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">CPF</label>
                            <input type="text" id="disabledTfdPacienteCpf" class="form-control" disabled>
                        </div>

                        <hr>

                        <div class="mb-2 col-4">
                            <label for="">Data da solicitação <i class="fa fa-question-circle text-muted" data-toggle="tooltip" title="Data da solicitação do TFD."></i></label>
                            <input type="date" name="tfd_data_solicitacao" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Data do atendimento <i class="fa fa-question-circle text-muted" data-toggle="tooltip" title="Data agendada para o atendimento do paciente."></i></label>
                            <input type="date" name="tfd_data_atendimento" class="form-control" required>
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Cidade do atendimento <i class="fa fa-question-circle text-muted" data-toggle="tooltip" title="Cidade em que paciente vai realizar o atendimento."></i></label>
                            <input type="text" name="tfd_cidade_destino" class="form-control" required>
                        </div>

                        <div class="mb-2 col-3">
                            <label for="">Tipo de deslocamento</label>
                            <select name="tfd_veiculo" class="form-control" id="" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Ambulância">Ambulância</option>
                                <option value="Carro de passeio">Carro de passeio</option>
                                <option value="Transporte sanitário">Transporte sanitário</option>
                                <option value="Ônibus">Ônibus</option>
                                <option value="Carro próprio">Carro próprio</option>
                            </select>
                        </div>

                        <div class="mb-2 col-3">
                            <label for="">cota</label>
                            <input type="text" name="tfd_cota" class="form-control" required>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Estabelecimento solicitante</label>
                            <input type="text" name="tfd_estabelecimento_solicitante" class="form-control" required>
                        </div>
                        <div class="mb-2 col-3">
                            <label for="">Estabelecimento prestador</label>
                            <input type="text" name="tfd_estabelecimento_prestador" class="form-control" required>
                        </div>

                        <hr>

                        <div class="col-3">
                            <label for="tfd_alimentacao" name="tfd_alimentacao"> Necessidade de alimentação? <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo para alimentação?"></i></label>
                            <select name="tfd_alimentacao" class="form-control" id="" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tfd_passagem" name="tfd_passagem"> Necessidade de Passagem? <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo com passagem?"></i></label>
                            <select name="tfd_passagem" class="form-control" id="" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tfd_hospedagem" name="tfd_hospedagem"> Necessidade de Hospedagem? <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo com hospedagem?"></i></label>
                            <select name="tfd_hospedagem" class="form-control" id="" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="tfd_acompanhante" name="tfd_acompanhante"> Necessidade de acompanhante? <i class="fa fa-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de um acompanhante?"></i></label>
                            <select name="tfd_acompanhante" class="form-control" id="" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>

                        <hr class="mt-3">


                        <div class="mb-2 col-12">
                            <label for="">Descrição</label>
                            <textarea name="tfd_descricao" id="" rows="2" class="form-control"></textarea>
                        </div>

                        <div class="mb-2 col-12">
                            <label for="">Anexo <small class="text-muted">(.jpeg .jpg .png pdf .doc .docx)</small> </label>
                            <div class="form-file">
                                <input class="form-file-input" id="customFile" name="tfd_anexo" type="file" />
                                <label class="form-file-label" name="tfd_anexo" for="customFile">
                                    <span class="form-file-text">Escolha um arquivo...</span>
                                    <span class="form-file-button"><i class="fas fa-file-medical"></i> Procurar arquivo</span>
                                </label>
                            </div>
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
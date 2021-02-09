<!-- Modal add_tfd_modal-->
<div class="modal fade" id="add_tfd_modal" role="dialog" aria-labelledby="add_tfd_label" aria-hidden="true">
    <div class="modal-dialog  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_tfd_label"><i class="fas fa-laptop-medical"></i> Adicionar novo TFD</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/tfd/novo') ?>" method="post" enctype="multipart/form-data">
                <?= $csrf_input ?>
                <div class="modal-body modal-scroll">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="">Nome do paciente:</label>
                            <select name="paciente_id" id="addTfdSelect2" name="paciente_id" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Nascimento</label>
                            <input type="date" id="disabled_paciente_nascimento_tfd" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">CPF</label>
                            <input type="text" id="disabled_paciente_cpf_tfd" class="form-control" disabled>
                        </div>

                        <hr>

                        <div class="mb-2 col-lg-3">
                            <label for="">Data da solicitação <i class="fa fa-question-circle text-muted" data-toggle="tooltip" title="Data da solicitação do TFD."></i></label>
                            <input type="date" name="tfd_data_solicitacao" class="form-control" required>
                        </div>


                        <div class="mb-2 col-lg-3">
                            <label for="">Estabelecimento solicitante <i class="fa fa-question-circle text-muted" data-toggle="tooltip" title="Qual estabelecimento solicitou o TFD"></i></label>
                            <select name="tfd_estabelecimento_solicitante" id="add_tfd_estabelecimento_solicitante" style="width: 100%;" required></select>

                        </div>

                        <div class="mb-2 col-lg-6">
                            <label for="">Anexo <i class="fa fa-question-circle text-muted" data-toggle="tooltip" title="Arquivos do tipo .jpeg .jpg .png pdf .doc ou .docx"></i> </label>
                            <div class="form-file">
                                <input class="form-file-input" id="customFile" name="tfd_anexo" type="file" />
                                <label class="form-file-label" name="tfd_anexo" for="customFile">
                                    <span class="form-file-text">Escolha um arquivo...</span>
                                    <span class="form-file-button"><i class="fas fa-file-medical"></i> Procurar arquivo</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-2 col-lg-12">
                            <label for="">Descrição / Observações</label>
                            <textarea name="tfd_descricao" id="" rows="2" class="form-control"></textarea>
                        </div>

                        <div class="col-lg-12 mt-1">
                            <label>Classificação de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="1" id="add_tfd1" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="add_tfd1"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="2" id="add_tfd2" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="add_tfd2"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="3" id="add_tfd3" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="add_tfd3"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="tfd_risco" value="4" id="add_tfd4" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="add_tfd4"><span class="m-2">4</span></label><br>Alta
                        </div>

                        <hr>

                        <div class="my-2 col-12">
                            <div class="form-check form-switch">
                                <input name="notificar_whatsapp" value="true" class="form-check-input" id="add_tfd_whatsapp" type="checkbox" checked /><label class="form-check-label" for="add_tfd_whatsapp">Notificar paciente por whatsapp?</label>
                            </div>
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
    let add_tfd_modal = new bootstrap.Modal(document.getElementById('add_tfd_modal'));

    $(document).ready(function() {
        let tfdSelect2 = $('#addTfdSelect2').select2({
            ajax: {
                url: '<?= base_url('v2/pacientes/json/select2') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
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
            $('#disabled_paciente_cpf_tfd').val(e.params.data.cpf)
            $('#disabled_paciente_nascimento_tfd').val(e.params.data.nascimento)
        });

        //ESTABELECIMENTOS SOLICITANTES
        let add_tfd_estabelecimento_solicitante = $('#add_tfd_estabelecimento_solicitante').select2({
            ajax: {
                url: '<?= base_url('v2/api/estabelecimentos-solicitantes/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        estabelecimento: params.term,
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
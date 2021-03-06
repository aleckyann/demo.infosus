<!-- Modal add_procedimento_modal-->
<div class="modal fade" id="add_procedimento_modal" role="dialog" aria-labelledby="add_procedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_procedimento_label"><i class="far fa-calendar-plus"></i> Adicionar novo procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/novo') ?>" id="add_procedimento_form" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-3 col-lg-7">
                            <label for="">Nome do paciente:</label>
                            <select name="paciente_id" id="add_procedimentos_select2" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Nascimento:</label>
                            <input type="date" id="disabledProcedimentoNascimento" class="form-control p-0" disabled>
                        </div>
                        <div class="mb-2 col-lg-2">
                            <label for="">CPF:</label>
                            <input type="text" id="disabledProcedimentoCpf" class="form-control" disabled>
                        </div>
                        <hr>
                        <div class="mb-2 col-lg-12">
                            <label for="">Nome do procedimento:</label>
                            <select name="tabela_proced_id" style="width:100%" id="tabela_procedimentos_select2" required></select>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Especialidade:</label>
                            <select name="especialidade" class="form-select" required>
                                <option selected disabled>Selecione uma especialidade</option>
                                <?php foreach ($this->Especialidades->getAll() as $e) : ?>
                                    <option value="<?= $e['especialidades_id'] ?>"><?= $e['especialidade_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Estabelecimento solicitante:</label>
                            <select name="estabelecimento_solicitante" id="novo_procedimento_estabelecimento_solicitante" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Profissional solicitante:</label>
                            <select name="profissional_solicitante" id="agendar_procedimento_profissionais" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Data de entrada:</label>
                            <input type="date" name="data_solicitacao" class="form-control" required>
                        </div>

                        <div class="mb-2 col-lg-12">
                            <label for="">Principais sintomas cl??nicos:</label>
                            <textarea type="date" name="sintomas" class="form-control"></textarea>
                        </div>

                        <div class="col-lg-12 mt-1">
                            <label>Classifica????o de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="1" id="btn-check-outlined" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="btn-check-outlined"><span class="m-2">1</span></label><br>
                            N??o agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="2" id="btn-check-outlined1" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="btn-check-outlined1"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="3" id="btn-check-outlined2" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="btn-check-outlined2"><span class="m-2">3</span></label><br>
                            Intermedi??ria
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="4" id="btn-check-outlined3" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="btn-check-outlined3"><span class="m-2">4</span></label><br>Alta
                        </div>

                        <div class="my-2 col-12">
                            <div class="form-check form-switch">
                                <input name="notificar_whatsapp" class="form-check-input" id="add_procedimento_whatsapp" value="true" type="checkbox" checked /><label class="form-check-label" for="add_procedimento_whatsapp">Notificar paciente por whatsapp?</label>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="add_procedimento_submit_button" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    //Cria modal para editar paciente
    let add_procedimento_modal = new bootstrap.Modal(document.getElementById('add_procedimento_modal'))

    $('#add_procedimento_form').on('submit', function() {
        $('#add_procedimento_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
    })

    $(document).ready(function() {
        let procedimentoSelect2 = $('#add_procedimentos_select2').select2({
            ajax: {
                url: '<?= base_url('v2/api/pacientes/select2') ?>',
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
        procedimentoSelect2.on('select2:select', function(e) {
            $('#disabledProcedimentoCpf').val(e.params.data.cpf)
            $('#disabledProcedimentoNascimento').val(e.params.data.nascimento)
        });

        let tabela_procedimentos = $('#tabela_procedimentos_select2').select2({
            ajax: {
                url: '<?= base_url('v2/api/tabela_proced/select2') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        nome: params.term,
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
                placeholder: "Selecione um procedimento",
            },
            delay: 250,
            minimumInputLength: 1,
        });


        //CARREGA SELECT2 COM ESTABELECIMENTOS SOLICITANTES [MODAL EDITAR]
        let novo_procedimento_estabelecimento_solicitante = $('#novo_procedimento_estabelecimento_solicitante').select2({
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
                placeholder: "Selecione uma cota",
            },
            delay: 250,
            minimumInputLength: 1,
        });

        //CARREGA SELECT2 COM MUNICIPIOS SOLICITANTES [MODAL EDITAR]
        let agendar_procedimento_profissionais = $('#agendar_procedimento_profissionais').select2({
            ajax: {
                url: '<?= base_url('v2/api/profissionais/json') ?>',
                method: 'POST',
                data: function(params) {
                    let query = {
                        profissional_nome: params.term,
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
                placeholder: "Selecione um profissional",
            },
            delay: 250,
            minimumInputLength: 1,
        });
    });
</script>
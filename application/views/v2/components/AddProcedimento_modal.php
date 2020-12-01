<!-- Modal AddProcedimento_modal-->
<div class="modal fade" id="AddProcedimento_modal" role="dialog" aria-labelledby="AddProcedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light text-dark" id="AddProcedimento_label"><i class="far fa-calendar-plus"></i> Adicionar novo procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/novo') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label for="">Nome do paciente:</label>
                            <select name="paciente_id" id="addProcedimentoSelect2" style="width: 100%;" required></select>
                        </div>
                        <div class="mb-2 col-6">
                            <label for="">Nome do procedimento:</label>
                            <input type="text" name="nome_procedimento" class="form-control" required>
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
                            <input type="radio" class="btn-check" name="procedimento_risco" value="1" id="btn-check-outlined" autocomplete="off" required>
                            <label class="btn btn-outline-primary" for="btn-check-outlined"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="2" id="btn-check-outlined1" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="btn-check-outlined1"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="3" id="btn-check-outlined2" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="btn-check-outlined2"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check" name="procedimento_risco" value="4" id="btn-check-outlined3" autocomplete="off" required>
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
    var AddProcedimento_modal = new bootstrap.Modal(document.getElementById('AddProcedimento_modal'), {
        keyboard: false
    })
    $(document).ready(function() {
        var casaDeApoioSelect2 = $('#addProcedimentoSelect2').select2({
            ajax: {
                url: '<?= base_url('v2/pacientes/json/select2') ?>',
                method: 'POST',
                data: function(params) {
                    var query = {
                        nome_paciente: params.term,
                        <?= $csrf_name ?>: '<?= $csrf_value ?>'
                    }

                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                dataType: 'json',
                placeholder: "Selecione um paciente",
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
        casaDeApoioSelect2.on('select2:select', function(e) {
            console.log(e)
            // -------
            // VER COMO INSERIR INFORMAÇÕES DO PACIENTE NO MODAL
            // --------
        });
    });
</script>
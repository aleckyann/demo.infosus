<!-- Modal agendar_procedimento_modal-->
<div class="modal fade" id="agendar_procedimento_modal" role="dialog" aria-labelledby="agendarProcedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light text-dark" id="agendarProcedimento_label"><i class="fas fa-calendar-alt"></i> Agendar procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/agendar') ?>" method="post" id="agendar_procedimento_form">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="procedimentos_id" id="agendar_procedimentos_id">
                    <div class="row">
                        <div class="mb-2 col-lg-6">
                            <label for="">Nome do paciente</label>
                            <input class="form-control" type="text" id="agendar_nome_paciente" disabled>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Telefone</label>
                            <input class="form-control" type="text" id="agendar_telefone_paciente" disabled>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">CNS</label>
                            <input class="form-control" type="text" id="agendar_cns_paciente" disabled>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Nome do procedimento</label>
                            <input class="form-control" type="text" id="agendar_nome_procedimento" disabled>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Especialidade</label>
                            <input class="form-control" type="text" id="agendar_especialidade" disabled>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Estabelecimento solicitante</label>
                            <input type="text" id="agendar_procedimento_estabelecimento_solicitante" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Profissional solicitante</label>
                            <input type="text" id="agendar_profissional_solicitante" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Data de entrada</label>
                            <input type="date" id="agendar_data_solicitacao" class="form-control" disabled>
                        </div>

                        <div class="mb-2 col-lg-12">
                            <label for="">Principais sintomas clínicos</label>
                            <textarea type="date" name="sintomas" id="agendar_sintomas" class="form-control" disabled></textarea>
                        </div>
                        <hr>
                        <div class="mb-2 col-lg-6">
                            <label for="">Estabelecimento prestador</label>
                            <select name="estabelecimento_prestador" id="agendar_procedimento_estabelecimento_prestador" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Cidade</label>
                            <select name="cidade_prestador" id="agendar_procedimento_municipios" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Cota</label>
                            <select name="cota" id="agendar_procedimento_cotas" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Data agendada</label>
                            <input type="date" class="form-control" name="data" required>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="adicionar_procedimento_submit_button" type="submit">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>
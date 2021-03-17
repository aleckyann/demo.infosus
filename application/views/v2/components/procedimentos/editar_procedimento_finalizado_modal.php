<!-- Modal editar_procedimento_finalizado_modal-->
<div class="modal fade" id="editar_procedimento_finalizado_modal" role="dialog" aria-labelledby="editar_procedimento_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title font-weight-light text-white" id="editar_procedimento_label"><i class="fas fa-edit"></i> Editar procedimento finalizados</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/regulacao/procedimentos/editar') ?>" method="post" id="editar_procedimento_form">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <input type="hidden" name="procedimentos_id" id="procedimentos_id">
                    <div class="row">
                        <div class="mb-4 col-lg-12">
                            <label for="">Nome do paciente</label>
                            <input type="text" class="form-control" id="nome_paciente" readonly>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Nome do procedimento</label>
                            <select name="tabela_proced_id" id="editar_procedimento_nome_procedimento" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Especialidade</label>
                            <select name="especialidade" id="especialidade" class="form-select" required>
                                <option selected disabled>Selecione uma especialidade</option>
                                <?php foreach ($this->Especialidades->getAll() as $e) : ?>
                                    <option value="<?= $e['especialidades_id'] ?>"><?= $e['especialidade_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Estabelecimento solicitante</label>
                            <select name="estabelecimento_solicitante" id="estabelecimento_solicitante" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Profissional solicitante</label>
                            <select name="profissional_solicitante" id="profissional_solicitante" required style="width:100%"></select>
                        </div>
                        <!--  -->
                        <div class="mb-2 col-lg-6">
                            <label for="">Estabelecimento prestador</label>
                            <select name="estabelecimento_prestador" required class="form-select">
                                <?php foreach($this->db->get_where('estabelecimentos', ['estabelecimento_tipo'=>'PRESTADOR'])->result_array() as $e): ?>
                                    <option value="<?=$e['estabelecimento_id']?>"><?=$e['estabelecimento_nome']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Cidade</label>
                            <select name="cidade_prestador" id="cidade_prestador" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Cota</label>
                            <select name="cota" id="cotas" required style="width:100%"></select>
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Data agendada</label>
                            <input type="date" name="data" id="data" class="form-control">
                        </div>
                        <!--  -->
                        <div class="mb-2 col-lg-12">
                            <label for="">Principais sintomas clínicos</label>
                            <textarea type="date" name="sintomas" id="sintomas" class="form-control"></textarea>
                        </div>

                        <div class="col-lg-12 mt-1">
                            <label>Classificação de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="1" id="editarProcedimentoButton1" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="editarProcedimentoButton1"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="2" id="editarProcedimentoButton2" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="editarProcedimentoButton2"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="3" id="editarProcedimentoButton3" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="editarProcedimentoButton3"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editarProcedimentoButton" name="editar_procedimento_risco" value="4" id="editarProcedimentoButton4" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="editarProcedimentoButton4"><span class="m-2">4</span></label><br>Alta
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="editar_procedimento_submit_button" type="submit">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>
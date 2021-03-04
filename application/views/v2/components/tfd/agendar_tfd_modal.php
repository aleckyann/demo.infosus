<!-- Modal agendar_tfd_modal-->
<div class="modal fade" id="agendar_tfd_modal" role="dialog" aria-labelledby="agendar_tfd_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form action="<?= base_url('v2/regulacao/tfd/agendar') ?>" id="agendar_tfd_form" method="post">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title font-weight-light text-white" id="agendar_tfd_label"><i class="fas fa-laptop-medical"></i> Agendamento de procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <input type="hidden" name="tfd_id" id="agendar_tfd_id">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="">Nome do paciente:</label>
                            <input type="text" class="form-control" id="agendar_tfd_paciente_nome" disabled>
                        </div>

                        <div class="mb-2 col-lg-3">
                            <label for="">Nascimento</label>
                            <input type="date" id="agendar_tfd_paciente_nascimento" class="form-control" disabled>
                        </div>

                        <div class="mb-2 col-lg-3">
                            <label for="">CPF</label>
                            <input type="text" id="agendar_tfd_paciente_cpf" class="form-control" disabled>
                        </div>

                        <hr>

                        <div class="mb-2 col-lg-4">
                            <label for="">Data da solicitação <i class="fa fa-question-circle text-primary" data-toggle="tooltip" title="Data da solicitação do TFD."></i></label>
                            <input type="date" name="tfd_data_solicitacao" id="agendar_tfd_data_solicitacao" class="form-control" required>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Data do atendimento <i class="fa fa-question-circle text-primary" data-toggle="tooltip" title="Data agendada para o atendimento do paciente."></i></label>
                            <input type="date" name="tfd_data_atendimento" id="agendar_tfd_data_atendimento" class="form-control" required>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Cidade do atendimento <i class="fa fa-question-circle text-primary" data-toggle="tooltip" title="Cidade em que paciente vai realizar o atendimento."></i></label>
                            <select name="tfd_cidade_destino" id="agendar_tfd_cidade_destino" style="width: 100%;" required></select>
                        </div>

                        <div class="mb-2 col-lg-3">
                            <label for="">Tipo de deslocamento</label>
                            <select name="tfd_veiculo" id="agendar_tfd_veiculo" class="form-select" id="" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Ambulância">Ambulância</option>
                                <option value="Carro de passeio">Carro de passeio</option>
                                <option value="Transporte sanitário">Transporte sanitário</option>
                                <option value="Ônibus">Ônibus</option>
                                <option value="Carro próprio">Carro próprio</option>
                            </select>
                        </div>

                        <div class="mb-2 col-lg-3">
                            <label for="">Cota/convênio</label>
                            <select name="tfd_cota" id="agendar_tfd_cota" class="form-select" id="" required>
                                <option value="" disabled selected>Selecione</option>
                                <?php foreach ($this->Cotas->getAll() as $c) : ?>
                                    <option value="<?= $c['cota_id'] ?>"><?= $c['cota_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Estabelecimento solicitante</label>
                            <select name="tfd_estabelecimento_solicitante" id="agendar_tfd_estabelecimento_solicitante" class="form-select" required>
                                <option value="" disabled selected>Selecione</option>
                                <?php foreach ($this->Estabelecimentos->getAll(['estabelecimento_tipo' => 'SOLICITANTE']) as $c) : ?>
                                    <option value="<?= $c['estabelecimento_id'] ?>"><?= $c['estabelecimento_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Estabelecimento prestador</label>
                            <select name="tfd_estabelecimento_prestador" id="agendar_tfd_estabelecimento_prestador" class="form-select" required>
                                <option value="" disabled selected>Selecione</option>
                                <?php foreach ($this->Estabelecimentos->getAll(['estabelecimento_tipo' => 'PRESTADOR']) as $c) : ?>
                                    <option value="<?= $c['estabelecimento_id'] ?>"><?= $c['estabelecimento_nome'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <hr>

                        <div class="col-lg-3">
                            <label for="tfd_alimentacao" name="tfd_alimentacao"> Necessidade de alimentação? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo para alimentação?"></i></label>
                            <select name="tfd_alimentacao" class="form-select" id="agendar_tfd_alimentacao" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="tfd_passagem" name="tfd_passagem"> Necessidade de Passagem? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo com passagem?"></i></label>
                            <select name="tfd_passagem" class="form-select" id="agendar_tfd_passagem" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="tfd_hospedagem" name="tfd_hospedagem"> Necessidade de Hospedagem? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de ajuda de custo com hospedagem?"></i></label>
                            <select name="tfd_hospedagem" class="form-select" id="agendar_tfd_hospedagem" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="tfd_acompanhante" name="tfd_acompanhante"> Necessidade de acompanhante? <i class="fa fa-question-circle text-primary" data-toggle="tooltip" data-placement="top" title="Este paciente precisa de um acompanhante?"></i></label>
                            <select name="tfd_acompanhante" class="form-control" id="agendar_tfd_acompanhante" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Não">Não</option>
                                <option value="Sim">Sim</option>
                            </select>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="agendar_tfd_submit_button" type="submit">Agendar</button>
                </div>
            </form>
        </div>
    </div>
</div>
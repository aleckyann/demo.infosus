<!-- Modal editarPaciente-->
<div class="modal fade" id="editar_paciente_modal" tabindex="-1" role="dialog" aria-labelledby="editar_modal_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title font-weight-light text-white" id="editar_modal_label"><i class="fas fa-user-injured"></i> Editar paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/pacientes/edit') ?>" id="editar_paciente_form" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">
                        <input type="hidden" name="paciente_id" id="paciente_id">
                        <div class="mb-2 col-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="nome_paciente" id="nome_paciente" type="text" placeholder="Nome completo do paciente" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Data de nascimento</label>
                            <input class="form-control" name="nascimento" id="nascimento" type="date" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">CPF</label>
                            <input class="form-control" name="cpf" id="cpf" type="text" placeholder="000.000.000-00" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">RG</label>
                            <input class="form-control" name="identidade" id="identidade" type="text" placeholder="00.000.000" />
                        </div>

                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Telefone</label>
                            <input class="form-control" name="telefone_paciente" id="telefone_paciente" type="phone" placeholder="(00) 99999-9999" />
                        </div>
                        <div class="mb-2 col-6">
                            <label class="form-label">Endere??o</label>
                            <input class="form-control" name="endereco_paciente" id="endereco_paciente" type="text" placeholder="Endere??o completo" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">CEP</label>
                            <input class="form-control" name="cep" id="cep" type="text" placeholder="39999-999" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">Bairro</label>
                            <input class="form-control" name="bairro_paciente" id="bairro_paciente" type="text" placeholder="Nome do bairro" />
                        </div>

                        <div class="mb-2 col-3">
                            <label class="form-label">CNS</label>
                            <input class="form-control" name="cns_paciente" id="cns_paciente" type="text" placeholder="Cart??o do sus" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">ACS ou refer??ncia</label>
                            <input class="form-control" name="acs" id="acs" type="text" placeholder="Agente de sa??de" />
                        </div>
                        <div class="mb-2 col-5">
                            <label class="form-label">Respons??vel</label>
                            <input class="form-control" name="responsavel" id="responsavel" type="text" placeholder="Respons??vel se houver" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Profiss??o</label>
                            <input class="form-control" name="profissao" id="profissao" type="text" placeholder="Profiss??o" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="editar_paciente_submit_button" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal novoPaciente-->
<div class="modal fade" id="novoPaciente" tabindex="-1" role="dialog" aria-labelledby="novoPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="novoPacienteLabel"><i class="fas fa-user-injured"></i> Cadastrar novo paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/pacientes/new') ?>" method="post">
                <div class="modal-body">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="nome_paciente" type="text" placeholder="Nome completo do paciente" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">Data de nascimento</label>
                            <input class="form-control" name="nascimento" type="date" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">CPF</label>
                            <input class="form-control" name="cpf" type="text" placeholder="000.000.000-00" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">RG</label>
                            <input class="form-control" name="identidade" type="text" placeholder="00.000.000" />
                        </div>

                        <div class="mb-2 col-4">
                            <label class="form-label">Telefone</label>
                            <input class="form-control" name="telefone_paciente" type="phone" placeholder="(00) 99999-9999" />
                        </div>
                        <div class="mb-2 col-6">
                            <label class="form-label">Endereço</label>
                            <input class="form-control" name="endereco" type="text" placeholder="Endereço completo" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">CEP</label>
                            <input class="form-control" name="cep" type="search" placeholder="39999-999" />
                        </div>
                        <div class="mb-2 col-3">
                            <label class="form-label">Bairro</label>
                            <input class="form-control" name="bairro_paciente" type="text" placeholder="Nome do bairro" />
                        </div>

                        <div class="mb-2 col-3">
                            <label class="form-label">CNS</label>
                            <input class="form-control" name="cns_paciente" type="text" placeholder="Cartão do sus" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">ACS ou referência</label>
                            <input class="form-control" name="acs" type="text" placeholder="Agente de saúde" />
                        </div>
                        <div class="mb-2 col-5">
                            <label class="form-label">Responsável</label>
                            <input class="form-control" name="responsavel" type="text" placeholder="Responsável se houver" />
                        </div>
                        <div class="mb-2 col-4">
                            <label class="form-label">Profissão</label>
                            <input class="form-control" name="profissao" type="text" placeholder="Profissão" />
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
    //Cria modal para adição de pacientes
    var novoPaciente = new bootstrap.Modal(document.getElementById('novoPaciente'), {
        keyboard: false
    })
</script>
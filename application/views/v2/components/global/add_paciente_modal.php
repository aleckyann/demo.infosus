<!-- Modal add_paciente_modal-->
<div class="modal fade" id="add_paciente_modal" tabindex="-1" role="dialog" aria-labelledby="add_paciente_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_paciente_label"><i class="fas fa-user-injured"></i> Cadastrar novo paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/pacientes/new') ?>" id="add_paciente_form" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-8">
                            <label class="form-label">Nome</label>
                            <input class="form-control" name="nome_paciente" type="text" placeholder="Nome completo do paciente" required>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Data de nascimento</label>
                            <input class="form-control" name="nascimento" type="date" required>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">CPF</label>
                            <input class="form-control" name="cpf" type="text" placeholder="000.000.000-00" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">RG</label>
                            <input class="form-control" name="identidade" type="text" placeholder="00.000.000" />
                        </div>

                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Telefone</label>
                            <input class="form-control" name="telefone_paciente" type="phone" placeholder="(00) 99999-9999" />
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label class="form-label">Endere??o</label>
                            <input class="form-control" name="endereco_paciente" type="text" placeholder="Endere??o completo" />
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label class="form-label">CEP</label>
                            <input class="form-control" name="cep" type="search" placeholder="39999-999" />
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label class="form-label">Bairro</label>
                            <input class="form-control" name="bairro_paciente" type="text" placeholder="Nome do bairro" />
                        </div>

                        <div class="mb-2 col-lg-3">
                            <label class="form-label">CNS</label>
                            <input class="form-control" name="cns_paciente" type="text" placeholder="Cart??o do sus" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">ACS ou refer??ncia</label>
                            <input class="form-control" name="acs" type="text" placeholder="Agente de sa??de" />
                        </div>
                        <div class="mb-2 col-lg-5">
                            <label class="form-label">Respons??vel</label>
                            <input class="form-control" name="responsavel" type="text" placeholder="Respons??vel se houver" />
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label class="form-label">Profiss??o</label>
                            <input class="form-control" name="profissao" type="text" placeholder="Profiss??o" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit" id="add_paciente_submit_button">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    //Cria modal para adi????o de pacientes
    var add_paciente_modal = new bootstrap.Modal(document.getElementById('add_paciente_modal'));

    $('#add_paciente_form').on('submit', function() {
        $('#add_paciente_submit_button').html(`
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...
        `).addClass('disabled');
    })
</script>
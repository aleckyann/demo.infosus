<!-- Modal load_paciente_modal-->
<div class="modal fade" id="load_paciente_modal" role="dialog" aria-labelledby="load_paciente_label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="load_paciente_label"><i class="fas fa-user-injured"></i> Ficha do paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-scroll">
                <div class="row">
                    <div class="mb-2 col-lg-8">
                        <label class="form-label">Nome</label>
                        <input class="form-control" id="Load_nome_paciente" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-4">
                        <label class="form-label">Data de nascimento</label>
                        <input class="form-control" id="Load_nascimento" type="date" disabled />
                    </div>
                    <div class="mb-2 col-lg-4">
                        <label class="form-label">CPF</label>
                        <input class="form-control" id="Load_cpf" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-4">
                        <label class="form-label">RG</label>
                        <input class="form-control" id="Load_identidade" type="text" disabled />
                    </div>

                    <div class="mb-2 col-lg-4">
                        <label class="form-label">Telefone</label>
                        <input class="form-control" id="Load_telefone_paciente" type="phone" disabled />
                    </div>
                    <div class="mb-2 col-lg-6">
                        <label class="form-label">Endereço</label>
                        <input class="form-control" id="Load_endereco" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-3">
                        <label class="form-label">CEP</label>
                        <input class="form-control" id="Load_cep" type="search" disabled />
                    </div>
                    <div class="mb-2 col-lg-3">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" id="Load_bairro_paciente" type="text" disabled />
                    </div>

                    <div class="mb-2 col-lg-3">
                        <label class="form-label">CNS</label>
                        <input class="form-control" id="Load_cns_paciente" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-4">
                        <label class="form-label">ACS ou referência</label>
                        <input class="form-control" id="Load_acs" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-5">
                        <label class="form-label">Responsável</label>
                        <input class="form-control" id="Load_responsavel" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-4">
                        <label class="form-label">Profissão</label>
                        <input class="form-control" id="Load_profissao" type="text" disabled />
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    //Cria modal para mostrar dados do paciente
    var load_paciente_modal = new bootstrap.Modal(document.getElementById('load_paciente_modal'))

    $('.load_paciente_button').on('click', function() {

        $.ajax({
                method: "POST",
                url: "<?= base_url('v2/pacientes/jsonOne') ?>",
                data: {
                    <?= $csrf_name ?>: "<?= $csrf_value ?>",
                    paciente_id: this.dataset.paciente_id
                }
            })
            .done(function(paciente) {
                $('#Load_nome_paciente').val(paciente.nome_paciente)
                $('#Load_nascimento').val(paciente.nascimento)
                $('#Load_cpf').val(paciente.cpf)
                $('#Load_identidade').val(paciente.identidade)
                $('#Load_telefone_paciente').val(paciente.telefone_paciente)
                $('#Load_endereco').val(paciente.endereco)
                $('#Load_cep').val(paciente.cep)
                $('#Load_bairro_paciente').val(paciente.bairro_paciente)
                $('#Load_cns_paciente').val(paciente.cns_paciente)
                $('#Load_acs').val(paciente.acs)
                $('#Load_responsavel').val(paciente.responsavel)
                $('#Load_profissao').val(paciente.profissao)
                load_paciente_modal.show();
            });
    })
</script>
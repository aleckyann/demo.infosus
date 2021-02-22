<!-- Modal load_paciente_modal-->
<div class="modal fade" id="load_paciente_modal" role="dialog" aria-labelledby="load_paciente_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="load_paciente_label"><i class="fas fa-user-injured"></i> Ficha do paciente</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-scroll">
                <div style="background-color:#208EEE" id="load_paciente_gif">
                    <img src="<?= base_url('public/gifs/loading.gif') ?>" style="max-width:300px" class="mx-auto d-block">
                    <p class="text-white text-center">Carregando...</p>
                </div>
                <div class="row d-none" id="load_paciente_content">
                    <div class="mb-2 col-lg-6">
                        <label class="form-label">Nome</label>
                        <input class="form-control" id="load_nome_paciente" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-2">
                        <label class="form-label">Nascimento</label>
                        <input class="form-control" id="load_nascimento" type="date" disabled />
                    </div>
                    <div class="mb-2 col-lg-2">
                        <label class="form-label">CPF</label>
                        <input class="form-control" id="load_cpf" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-2">
                        <label class="form-label">RG</label>
                        <input class="form-control" id="load_identidade" type="text" disabled />
                    </div>

                    <div class="mb-2 col-lg-6">
                        <label class="form-label">Endereço</label>
                        <input class="form-control" id="Load_endereco" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-2">
                        <label class="form-label">CEP</label>
                        <input class="form-control" id="Load_cep" type="search" disabled />
                    </div>
                    <div class="mb-2 col-lg-2">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" id="Load_bairro_paciente" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-2">
                        <label class="form-label">Telefone</label>
                        <input class="form-control" id="load_telefone_paciente" type="phone" disabled />
                    </div>

                    <div class="mb-2 col-lg-3">
                        <label class="form-label">CNS</label>
                        <input class="form-control" id="load_cns_paciente" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-3">
                        <label class="form-label">ACS ou referência</label>
                        <input class="form-control" id="load_acs" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-3">
                        <label class="form-label">Responsável</label>
                        <input class="form-control" id="load_responsavel" type="text" disabled />
                    </div>
                    <div class="mb-2 col-lg-3">
                        <label class="form-label">Profissão</label>
                        <input class="form-control" id="load_profissao" type="text" disabled />
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

        $('#load_paciente_content').addClass('d-none')
        $('#load_paciente_gif').removeClass('d-none')
        load_paciente_modal.show();

        $.ajax({
                method: "POST",
                url: "<?= base_url('v2/api/pacientes/json') ?>",
                data: {
                    <?= $csrf_name ?>: "<?= $csrf_value ?>",
                    paciente_id: this.dataset.paciente_id
                }
            })
            .done(function(paciente) {
                $('#load_nome_paciente').val(paciente.nome_paciente)
                $('#load_nascimento').val(paciente.nascimento)
                $('#load_cpf').val(paciente.cpf)
                $('#load_identidade').val(paciente.identidade)
                $('#load_telefone_paciente').val(paciente.telefone_paciente)
                $('#Load_endereco').val(paciente.endereco_paciente)
                $('#Load_cep').val(paciente.cep)
                $('#Load_bairro_paciente').val(paciente.bairro_paciente)
                $('#load_cns_paciente').val(paciente.cns_paciente)
                $('#load_acs').val(paciente.acs)
                $('#load_responsavel').val(paciente.responsavel)
                $('#load_profissao').val(paciente.profissao)
                $('#load_paciente_content').removeClass('d-none')
                $('#load_paciente_gif').addClass('d-none')
            }).fail(function() {
                Swal.fire(
                    'Erro no servidor.',
                    'Por favor, tente novamente...',
                    'error'
                )
                $('#load_paciente_modal').modal('hide');
            })
    })
</script>
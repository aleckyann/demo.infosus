<!-- Modal add_estabelecimento_conf_modal-->
<div class="modal fade" id="add_estabelecimento_conf_modal" role="dialog" aria-labelledby="add_estabelecimento_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_estabelecimento_label"><i class="fas fa-user-edit"></i> Adicionar nova estabelecimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/estabelecimentos/novo') ?>" id="add_estabelecimento_conf_form" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-7">
                            <label for="">Nome da estabelecimento</label>
                            <input type="text" class="form-control" name="estabelecimento_nome" placeholder="Informe o nome do estabelecimento" required>
                        </div>

                        <div class="mb-2 col-lg-5">
                            <label for="">Tipo de estabelecimento</label>
                            <select name="estabelecimento_tipo" class="form-select" required>
                                <option value="" selected disabled>SELECIONE</option>
                                <option value="SOLICITANTE">SOLICITANTE/LOCAL</option>
                                <option value="PRESTADOR">PRESTADOR DE SERVIÇO</option>
                            </select>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" id="add_estabelecimento_conf_submit_button" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var add_estabelecimento_conf_modal = new bootstrap.Modal(document.getElementById('add_estabelecimento_conf_modal'), {
            keyboard: false
        })

    });
</script>
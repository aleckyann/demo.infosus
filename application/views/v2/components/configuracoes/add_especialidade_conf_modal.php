<!-- Modal add_especialidade_conf_modal-->
<div class="modal fade" id="add_especialidade_conf_modal" role="dialog" aria-labelledby="add_especialidade_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_especialidade_label"><i class="fas fa-user-edit"></i> Adicionar nova especialidade</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/especialidades/novo') ?>" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-12">
                            <label for="">Nome da especialidade</label>
                            <input type="text" class="form-control" name="especialidade_nome" placeholder="Informe o nome da especialidade que deseja adicionar ao sistema." required>
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
    $(document).ready(function() {
        var add_especialidade_conf_modal = new bootstrap.Modal(document.getElementById('add_especialidade_conf_modal'), {
            keyboard: false
        })
    });
</script>
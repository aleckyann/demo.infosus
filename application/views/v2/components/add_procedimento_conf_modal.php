<!-- Modal add_procedimento_conf_modal-->
<div class="modal fade" id="add_procedimento_conf_modal" role="dialog" aria-labelledby="add_procedimento_conf_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="add_procedimento_conf_label"><i class="fas fa-user-edit"></i> Adicionar novo procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/procedimentos/novo') ?>" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-12">
                            <label for="">Nome da procedimento</label>
                            <input type="text" class="form-control" name="nome" placeholder="Informe o nome da procedimento que deseja adicionar ao sistema." required>
                        </div>
                        <div class="mb-2 col-lg-12">
                            <label for="">Código</label>
                            <input type="number" class="form-control" name="codigo" placeholder="Informe o código do procedimento" required>
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
        var add_procedimento_conf_modal = new bootstrap.Modal(document.getElementById('add_procedimento_conf_modal'), {
            keyboard: false
        })

    });
</script>
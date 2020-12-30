<!-- Modal add_municipio_conf_modal-->
<div class="modal fade" id="add_municipio_conf_modal" role="dialog" aria-labelledby="add_municipio_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="add_municipio_label"><i class="fas fa-user-edit"></i> Adicionar nova municipio</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/configuracoes/municipios/novo') ?>" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">

                        <div class="mb-2 col-lg-8">
                            <label for="">Nome da municipio</label>
                            <input type="text" class="form-control" name="nome_municipio" placeholder="Informe o nome do municipio que deseja adicionar ao sistema." required>
                        </div>

                        <div class="mb-2 col-lg-4">
                            <label for="">Código IBGE</label>
                            <input type="text" class="form-control" name="cod_ibge" placeholder="Informe código IBGE do município" required>
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
        var add_municipio_conf_modal = new bootstrap.Modal(document.getElementById('add_municipio_conf_modal'), {
            keyboard: false
        })

    });
</script>
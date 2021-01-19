<!-- Modal add_estoques_modal-->
<div class="modal fade" id="add_estoques_modal" role="dialog" aria-labelledby="add_estoque_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title font-weight-light" id="add_estoque_label"><i class="fas fa-cart-plus"></i> Adicionar novo estoque</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/almoxarifado/estoques/novo') ?>" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-12">
                            <label for="">Nome do estoque</label>
                            <input type="text" class="form-control" name="estoque_nome" placeholder="Informe o nome do estoque" required>
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
    //Cria modal para adição de pacientes na casa de apoio
    var add_estoques_modal = new bootstrap.Modal(document.getElementById('add_estoques_modal'))
</script>
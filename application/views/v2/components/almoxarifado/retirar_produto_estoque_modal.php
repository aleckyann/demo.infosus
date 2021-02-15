<!-- Modal retirar_produto_estoque_modal-->
<div class="modal fade" id="retirar_produto_estoque_modal" role="dialog" aria-labelledby="retirar_produto_estoque_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title font-weight-light text-white" id="retirar_produto_estoque_label"><i class="fas fa-box"></i> Retirar do estoque</h5><button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/almoxarifado/produtos/retirar') ?>" method="post">
            <input type="hidden" id="retirar_produto_id" name="produto_id">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-4">
                            <label for="">Nome do produto</label>
                            <input type="text" class="form-control" id="retirar_produto_nome" disabled>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Estoque</label>
                            <input type="text" class="form-control" id="retirar_produto_estoque" disabled>
                        </div>
                        <div class="mb-2 col-lg-2">
                            <label for="">Quantidade atual</label>
                            <input type="number" class="form-control" id="retirar_produto_quantidade_atual" disabled>
                        </div>

                        <div class="mb-2 col-lg-2">
                            <label for="">Retirar</label>
                            <input type="number" class="form-control" name="retirar_quantidade" placeholder="Quantidade a retirar." required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Retirar</button>
                </div>
            </form>
        </div>
    </div>
</div>
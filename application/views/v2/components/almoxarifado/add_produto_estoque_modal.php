<!-- Modal add_produto_estoque_modal-->
<div class="modal fade" id="add_produto_estoque_modal" role="dialog" aria-labelledby="add_produto_estoque_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_produto_estoque_label"><i class="fas fa-box"></i> Adicionar produto ao estoque</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= current_url() ?>" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-6">
                            <label for="">Nome do produto</label>
                            <input type="text" class="form-control" name="produto_nome" required>
                        </div>

                        <div class="mb-2 col-lg-3">
                            <label for="">Quantidade</label>
                            <input type="number" class="form-control" name="produto_quantidade_atual" placeholder="Quantidade adicionada." required>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Quantidade mínima <small class="text-info">(opcional)</small></label>
                            <input type="number" class="form-control" name="produto_quantidade_minima" placeholder="Quantidade mínima.">
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
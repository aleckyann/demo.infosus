<!-- Modal repor_produto_estoque_modal-->
<div class="modal fade" id="repor_produto_estoque_modal" role="dialog" aria-labelledby="repor_produto_estoque_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="repor_produto_estoque_label"><i class="fas fa-box"></i> Reposição de estoque</h5><button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= current_url() ?>" method="post">
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-2 col-lg-4">
                            <label for="">Nome do produto</label>
                            <input type="text" class="form-control" id="repor_produto_nome" disabled>
                        </div>
                        <div class="mb-2 col-lg-4">
                            <label for="">Estoque</label>
                            <input type="text" class="form-control" id="repor_produto_estoque" disabled>
                        </div>

                        <div class="mb-2 col-lg-2">
                            <label for="">Quantidade atual</label>
                            <input type="number" class="form-control" name="produto_quantidade_atual" placeholder="Quantidade adicionada." required>
                        </div>
                        <div class="mb-2 col-lg-2">
                            <label for="">Repor</label>
                            <input type="number" class="form-control" name="produto_quantidade_atual" placeholder="Quantidade adicionada." required>
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
<!-- Modal add_produto_estoque_modal-->
<div class="modal fade" id="add_produto_estoque_modal" role="dialog" aria-labelledby="add_produto_estoque_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-light text-white" id="add_produto_estoque_label"><i class="fas fa-box"></i> Adicionar produto ao estoque</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('v2/almoxarifado/produtos/novo') ?>" method="post">
                <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="produto_estoque_id">
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
                            <label for="">Quantidade mínima</label>
                            <input type="number" class="form-control" name="produto_quantidade_minima" placeholder="Quantidade mínima." required>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Lote</label>
                            <input type="text" class="form-control" name="produto_lote" placeholder="Lote do produto">
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Validade do produto</label>
                            <input type="date" class="form-control" name="produto_validade" placeholder="Validade do produto">
                        </div>
                        <div class="mb-2 col-lg-6">
                            <label for="">Avisar quantos dias antes de vencer?</label>
                            <input type="number" class="form-control" name="produto_aviso_validade" placeholder="Número de dias">
                        </div>

                    </div>
                    <hr class="my-2">

                    <span class="text-primary small"><i class="fas fa-info-circle"></i> Quantidade mínima é utilizada para gerar alertas para produtos que estão próximos de acabar.</span><br>
                    <span class="text-primary small"><i class="fas fa-info-circle"></i> Configurando um aviso de vencimento o produto será marcado próximo do fim da sua validade.</span>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
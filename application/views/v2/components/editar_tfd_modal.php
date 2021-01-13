<!-- Modal editar_tfd_modal-->
<div class="modal fade" id="editar_tfd_modal" tabindex="-1" role="dialog" aria-labelledby="editar_tfd_label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form action="<?= base_url('v2/regulacao/tfd/editar') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="tfd_id" id="editar_tfd_id">
                <input type="hidden" name="editar_tfd_anexo" id="editar_tfd_anexo">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title font-weight-light text-white" id="editar_tfd_label"><i class="fas fa-edit"></i> Editar procedimento</h5><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-scroll">
                    <?= $csrf_input ?>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="">Nome do paciente:</label>
                            <input type="text" class="form-control" id="editar_tfd_paciente_nome" disabled>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">Nascimento</label>
                            <input type="date" id="editar_tfd_nascimento" class="form-control" disabled>
                        </div>
                        <div class="mb-2 col-lg-3">
                            <label for="">CPF</label>
                            <input type="text" id="editar_tfd_cpf" class="form-control" disabled>
                        </div>

                        <hr>

                        <div class="mb-2 col-4">
                            <label for="">Data da solicitação <i class="fa fa-question-circle text-primary" data-toggle="tooltip" title="Data da solicitação do TFD."></i></label>
                            <input type="date" name="tfd_data_solicitacao" id="editar_tfd_data_solicitacao" class="form-control" disabled>
                        </div>

                        <div class="mb-2 col-4">
                            <label for="">Estabelecimento solicitante</label>
                            <input type="text" name="tfd_estabelecimento_solicitante" id="editar_tfd_estabelecimento_solicitante" class="form-control">
                        </div>
                        <div class="mb-2 col-4">
                            <label for="">Anexo <small class="text-muted">(.jpeg .jpg .png pdf .doc .docx)</small> </label>
                            <div class="form-file">
                                <input class="form-file-input" id="editar_tfd_anexo_file" name="tfd_anexo" type="file" />
                                <label class="form-file-label" name="tfd_anexo" for="editar_tfd_anexo_file">
                                    <span class="form-file-text">Escolha um arquivo...</span>
                                    <span class="form-file-button"><i class="fas fa-file-medical"></i> Procurar arquivo</span>
                                </label>
                            </div>
                        </div>


                        <div class="mb-2 col-12">
                            <label for="">Descrição</label>
                            <textarea name="tfd_descricao" id="editar_tfd_descricao" rows="1" class="form-control"></textarea>
                        </div>



                        <div class="col-12 mt-1">
                            <label>Classificação de risco / vunerabilidade:</label>
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="1" id="editar_tfd1" autocomplete="off" required>
                            <label class="btn btn-outline-info" for="editar_tfd1"><span class="m-2">1</span></label><br>
                            Não agudo
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="2" id="editar_tfd2" autocomplete="off" required>
                            <label class="btn btn-outline-success" for="editar_tfd2"><span class="m-2">2</span></label><br>
                            Baixa
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="3" id="editar_tfd3" autocomplete="off" required>
                            <label class="btn btn-outline-warning" for="editar_tfd3"><span class="m-2">3</span></label><br>
                            Intermediária
                        </div>
                        <div class="my-2 col-3 text-center">
                            <input type="radio" class="btn-check editar_tfd_risco" name="editar_tfd_risco" value="4" id="editar_tfd4" autocomplete="off" required>
                            <label class="btn btn-outline-danger" for="editar_tfd4"><span class="m-2">4</span></label><br>Alta
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
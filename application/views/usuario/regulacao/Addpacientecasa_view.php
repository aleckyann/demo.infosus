   <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>IDENTIFICAÇÃO</strong><small> DO PACIENTE</small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="<?= $nome_paciente['nome_paciente'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vat" class=" form-control-label">NOME DO RESPONSÁVEL</label>
                        <input type="text" id="vat" value="<?= @$nome_paciente['responsavel'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="street" class=" form-control-label">CNS</label>
                        <input type="text" id="street" class="form-control" value="<?= $nome_paciente['cns_paciente'] ?>" disabled>
                    </div>
             
                    <div class="form-group col-md-6">
                        <label for="country" class=" form-control-label">ENDEREÇO</label>
                        <input type="text" id="country"  class="form-control" value="<?= $nome_paciente['endereco_paciente'] ?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>INCLUSÃO</strong><small> NA CASA</small></div>
                <div class="row">
                 <div class="card-body card-block">
                    <form action="../add-paciente-casa-save/<?= segment('5') ?>" method="post" autocomplete="off">
                        <div class="form-grou col-md-6">
                            <label for="street" class=" form-control-label">DATA DE ENTRADA</label>
                            <input name="data_entrada" type="date" id="street" class="form-control" required>
                            <input name="paciente_id" type="hidden" value="<?= segment('5') ?>">

                        </div>

                        <div class="form-grou col-md-6">
                            <label for="street" class=" form-control-label">DATA PREVISTA DE SAÍDA</label>
                            <input name="data_saida" type="date" id="street" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="country" class=" form-control-label">JUSTIFICATIVA OU OBSERVAÇÕES</label>
                            <textarea  name="observacao" class="form-control"></textarea>
                        </div>
                        <button style="margin-left: 10px" class="btn btn-success d-print-none">CONCLUIR</button> 
                        <a href="javascript:history.back()" class="btn btn-warning d-print-none">VOLTAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
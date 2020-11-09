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
            <div class="card-header"><strong>SOLICITAÇÃO</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <form action="../salva-procedimento" method="post" autocomplete="off">
                        
                        <div class="form-group col-md-8">
                            <label for="company" class=" form-control-label">PROCEDIMENTO</label>
                            <input name="nome_procedimento" type="text" list="proced" class="form-control">
                            <datalist id="proced">
                                <?php foreach ($tabela_proced as $proced): ?>
                                    <option value="<?= $proced['nome'] ?>"><?= $proced['codigo'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                            <input type="hidden" name="paciente_id" value="<?= segment('5') ?>">
                        </div>
                         <div class="form-group col-md-4">
                            <label for="street" class=" form-control-label">ESPECIALIDADE</label>
                            <input name="especialidade" type="text" id="street" list="esp" class="form-control">
                            <datalist id="esp">
                                <?php foreach ($especialidades as $especialidade): ?>
                                    <option value="<?= $especialidade['especialidade_nome'] ?>"></option>
                                <?php endforeach ?>
                            </datalist>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="vat" class=" form-control-label">ESTABELECIMENTO SOLICITANTE</label>
                            <input name="estabelecimento_solicitante" type="text" id="vat" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="street" class=" form-control-label">PROFISSIONAL SOLICITANTE</label>
                            <input name="profissional_solicitante" type="text" id="street" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="street" class=" form-control-label">DATA DA SOLICITAÇÃO</label>
                            <input name="data_solicitacao" type="date" id="street" class="form-control">
                        </div>
                 
                        <div class="form-group col-md-12">
                            <label for="country" class=" form-control-label">PRINCIPAIS SINTOMAS CLÍNICOS</label>
                            <textarea  name="sintomas" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-success d-print-none">CONCLUIR</button> 
                        <a href="javascript:history.back()" class="btn btn-warning d-print-none">VOLTAR</a>
                    </form>

                </div>
            </div>
        </div>
    </div>

   
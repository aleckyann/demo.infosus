   <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>IDENTIFICAÇÃO</strong><small> DO PACIENTE</small></div>
            <div class="card-body card-block">
                <div class="row">
                    <form action="../edita-paciente/<?= $nome_paciente['paciente_id'] ?>" method="post">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="<?= $nome_paciente['nome_paciente'] ?>" name="nome_paciente" required class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="vat" class=" form-control-label">CPF</label>
                        <input type="number" id="vat" name="cpf" value="<?= $nome_paciente['cpf'] ?>" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="street" class=" form-control-label">CNS</label>
                        <input type="number" id="street" name="cns_paciente" class="form-control" value="<?= $nome_paciente['cns_paciente'] ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="street" class=" form-control-label">IDENTIDADE</label>
                        <input type="text" id="street" name="identidade" class="form-control" value="<?= $nome_paciente['identidade'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="vat" class=" form-control-label">NOME DO RESPONSÁVEL</label>
                        <input type="text" id="vat" name="responsavel" class="form-control" value="<?= $nome_paciente['responsavel'] ?>">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="street" class=" form-control-label">CEP</label>
                        <input type="number" id="street" name="cep" class="form-control" value="<?= $nome_paciente['cep'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">ENDEREÇO</label>
                        <input type="text" id="country" name="endereco_paciente" required class="form-control" value="<?= $nome_paciente['endereco_paciente'] ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">BAIRRO</label>
                        <input type="text" id="country" name="bairro_paciente" required class="form-control" value="<?= $nome_paciente['bairro_paciente'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="country" required name="telefone_paciente" required class="form-control" value="<?= $nome_paciente['telefone_paciente'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="vat" class=" form-control-label">ACS OU OUTRA REFERÊNCIA</label>
                        <input type="text" id="vat" name="acs" class="form-control" value="<?= $nome_paciente['acs'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">DATA DE NASCIMENTO</label>
                        <input type="date" id="country" name="nascimento"  class="form-control" value="<?= $nome_paciente['nascimento'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">PROFISSÃO</label>
                        <input type="text" id="country" name="profissao"  class="form-control" value="<?= $nome_paciente['profissao'] ?>">
                    </div>

                </div><br>
                <button class="btn btn-success">CONCLUIR</button> 
                </form>
                        <a href="javascript:history.back()" class="btn btn-warning">VOLTAR</a>
            </div>
        </div>
    </div>

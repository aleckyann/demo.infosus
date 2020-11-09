   <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>IDENTIFICAÇÃO</strong><small> DO PACIENTE</small></div>
            <div class="card-body card-block">
                <div class="row">
                    <form action="../cadastros/salva-paciente" method="post">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" name="nome_paciente" required class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="vat" class=" form-control-label">CPF</label>
                        <input type="number" id="vat" name="cpf" class="form-control">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="street" class=" form-control-label">CNS</label>
                        <input type="number" id="street" name="cns_paciente" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="id" class=" form-control-label">IDENTIDADE</label>
                        <input type="text" id="id" name="identidade" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="resp" class=" form-control-label">NOME DO RESPONSÁVEL</label>
                        <input type="text" id="resp" name="responsavel" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cep" class=" form-control-label">CEP</label>
                        <input type="number" id="cep" name="cep" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="end" class=" form-control-label">ENDEREÇO</label>
                        <input type="text" id="end" name="endereco_paciente" required class="form-control">
                    </div>
                     <div class="form-group col-md-3">
                        <label for="tel" class=" form-control-label">BAIRRO</label>
                        <input type="text" id="tel" required name="bairro_paciente" required class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tel" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="tel" required name="telefone_paciente" required class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="acs" class=" form-control-label">ACS OU OUTRA REFERÊNCIA</label>
                        <input type="text" id="acs" name="acs" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nasc" class=" form-control-label">DATA DE NASCIMENTO</label>
                        <input type="date" id="nasc" name="nascimento" required class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="prof" class=" form-control-label">PROFISSÃO</label>
                        <input type="text" id="prof" name="profissao" required class="form-control">
                    </div>

                </div><br>
                <button class="btn btn-success">CONCLUIR</button> 
                </form>
                        <a href="javascript:history.back()" class="btn btn-warning">VOLTAR</a>
            </div>
        </div>
    </div>


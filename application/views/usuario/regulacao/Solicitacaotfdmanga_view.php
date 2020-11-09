   <div class="col-lg-12">
        <div class="card">
            <div class="card-header" align="center"><h3>SOLICITAÇÃO DE TRATAMENTO FORA DO DOMICILIO</h3></div>
            <div class="card-body card-block">
                <form action="<?= base_url() ?>usuario/regulacao/cadastra-tfd-manga" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="company" class=" form-control-label">REQUERENTE</label>
                        <input type="text" id="company" name="requerente" class="form-control">
                    </div>
                   
                    <div class="form-group col-md-3">
                        <label for="street" class=" form-control-label">DATA</label>
                        <input type="date" id="street" class="form-control" name="data_solicicao">
                    </div>
             
                    <div class="form-group col-md-3">
                        <label for="ped" class=" form-control-label">PEDIDO</label>
                        <input type="text" id="ped"  class="form-control" name="pedido">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cpf" class=" form-control-label">CPF</label>
                        <input type="text" id="cpf"  class="form-control" name="cpf_requerente">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rg" class=" form-control-label">RG</label>
                        <input type="text" id="rg"  class="form-control" name="rg_requerente">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="tel" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="tel"  class="form-control" name="telefone_requerente">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="end" class=" form-control-label">ENDEREÇO/Nº</label>
                        <input type="text" id="end"  class="form-control" value="<?= $nome_paciente['endereco_paciente'] ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bairro" class=" form-control-label">BAIRRO</label>
                        <input type="text" id="bairro"  class="form-control" value="<?= $nome_paciente['bairro_paciente'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>DADOS DO PACIENTE</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="<?= $nome_paciente['nome_paciente'] ?>" class="form-control" >
                        <input type="hidden"  value="<?= $nome_paciente['paciente_id'] ?>" name="paciente_id" >


                    </div>
                   
                    <div class="form-group col-md-6">
                            <label for="company" class=" form-control-label">PROCEDIMENTO</label>
                            <input name="nome_procedimento" type="text" list="proced" class="form-control">
                            <datalist id="proced">
                                <?php foreach ($tabela_proced as $proced): ?>
                                    <option value="<?= $proced['nome'] ?>"><?= $proced['codigo'] ?></option>
                                <?php endforeach ?>
                            </datalist>
                            <input type="hidden" name="paciente_id" value="<?= segment('4') ?>">
                        </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">DATA DO ATENDIMENTO</label>
                        <input type="date" id="country"  class="form-control" name="data_atend" value="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">DESTINO</label>
                        <input type="text" id="country"  class="form-control" name="destino" value="">
                    </div>
                    
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">PRESTADOR</label>
                        <input type="text" id="country"  class="form-control" name="prestador" value="">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">MÉDICO SOLICITANTE</label>
                        <input type="text" id="country"  class="form-control" name="medico_solicitante" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>

         <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>DADOS DA SOLICITAÇÃO</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-6">
                        <select class="form-control" name="tipo_transporte">
                            <option value="Não informado">DESLOCAMENTO</option>
                            <option value="Terrestre">AMBULÂNCIA</option>
                            <option value="CARRO PASSEIO">CARRO PASSEIO</option>
                            <option value="TRANSPORTE SANITÁRIO">TRANSPORTE SANITÁRIO</option>
                            <option value="ÔNIBUS">ÔNIBUS</option>
                            <option value="PRÓPRIO">PRÓPRIO</option>


                        </select>
                    </div>
                    
                    
                    <div class="form-group col-md-6">
                        <select class="form-control" name="acompanhante">
                            <option value="Não informado">NECESSIDADE DE ACOMPANHANTE</option>
                            <option value="COM ACOMPANHANTE" for="pq">COM ACOMPANHANTE</option>
                            <option value="SEM ACOMPANHANTE">SEM ACOMPANHANTE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="form-control" name="atendimento">
                            <option value="Não informado">ATENDIMENTO</option>
                            <option value="PRIMEIRO ATENDIMENTO">PRIMEIRO ATENDIMENTO</option>
                            <option value="EM TRATAMENTO">EM TRATAMENTO</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <textarea class="form-control" rows="4" name="motivo_acomp" id="pq">POR QUE?</textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="COM AUXÍLIO ALIMENTAÇÃO" id="inlineCheckbox1" value="" name="alimenta">
                            <label class="form-check-label" for="inlineCheckbox1">AUXÍLIO ALIMENTAÇÃO</label>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="COM PASSAGEM DE ÔNIBUS" id="inlineCheckbox2" value="" name="passagem">
                            <label class="form-check-label" for="inlineCheckbox2">PASSAGEM DE ÔNIBUS</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="desc" class=" form-control-label">DESCRIÇÃO</label>
                        <textarea class="form-control" rows="3" name="descricao" id="desc"></textarea>
                    </div>
            </div>
        </div>
    </div>
   

       
        <div>
                <button class="btn btn-success d-print-none">SOLICITAR</button> 
        </form>
                <a href="<?= base_url() ?>usuario/regulacao/lista-pacientes" class="btn btn-warning d-print-none">VOLTAR</a>
            </div><br><br>
    </div>

   
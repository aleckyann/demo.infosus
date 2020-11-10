<div class="col-lg-12">
        <div class="card">
            <div class="card-header" align="center"><h3>SOLICITAÇÃO DE TRATAMENTO FORA DO DOMICILIO</h3></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="<?= $paciente['nome_paciente'] ?>" class="form-control" disabled>
                    </div>
                   
                    <div class="form-group col-md-4">
                        <label for="street" class=" form-control-label">IDENTIDADE</label>
                        <input type="text" id="street" class="form-control" value="<?= $paciente['identidade'] ?>" disabled>
                    </div>
             
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">RESIDÊNCIA</label>
                        <input type="text" id="country"  class="form-control" value="<?= $paciente['endereco_paciente'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="country"  class="form-control" value="<?= $paciente['telefone_paciente'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">CEP</label>
                        <input type="text" id="country"  class="form-control" value="<?= $paciente['cep'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">PROFISSÃO</label>
                        <input type="text" id="country"  class="form-control" value="<?= $paciente['profissao'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">DATA DE NASCIMENTO</label>
                        <input id="country"  class="form-control" value="<?= $paciente['nascimento'] ?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>ACOMPANHANTE</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <form action="<?= base_url() ?>usuario/regulacao/cadastra-tfd" method="post">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="" name="nome_acompanhante" class="form-control" >
                        <input type="hidden"  value="<?= $paciente['paciente_id'] ?>" name="paciente_id" >


                    </div>
                   
                    <div class="form-group col-md-4">
                        <label for="street" class=" form-control-label">IDENTIDADE</label>
                        <input type="text" id="street" class="form-control" name="identidade_acompanhante" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="country"  class="form-control" name="telefone_acompanhante" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">RESIDÊNCIA</label>
                        <input type="text" id="country"  class="form-control" name="residencia_acompanhante" value="">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">CEP</label>
                        <input type="text" id="country"  class="form-control" name="cep_acompanhante" value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">RELAÇÃO COM O PACIENTE</label>
                        <input type="text" id="country"  class="form-control" name="relacao_acompanhante" value="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>HISTÓRICO DE DOENÇA</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="historico_doenca" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>EXAME FÍSICO</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="exame_fisico" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>DIAGNÓSTICO</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="diagnostico" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>EXAME(S) COMPLEMENTAR(ES) REALIZADO(S)</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="exames_complementares" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>TRATAMENTO(S) REALIZADO(S)</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="tratamentos_realizados" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>TRATAMENTO / EXAME INDICADO</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="tratamento_indicado" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>JUSTIFICAR AS RAZÕES QUE IMPOSSIBILITAM A REALIZAÇÃO DO TRATAMENTO / EXAME NA LOCALIDADE</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="justificar_tfd" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>JUSTIFICAR EM CASO DE NECESSIDADE DE ENCAMINHAMENTO URGENTE</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="justificar_urgencia" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>JUSTIFICAR EM CASO DE NECESSIDADE DE ACOMPANHANTE</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="justificar_acompanhante" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>TRANSPORTE RECOMENDÁVEL, JUSTIFICAR</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="transporte_recomendavel" type="text" id="company" class="form-control"></textarea> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>OUTRAS ANOTAÇÕES</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea name="outras_notas" type="text" id="company" class="form-control"></textarea> 
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">LOCAL</label>
                        <input type="text" id="company" value="" name="local" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">DATA</label>
                        <input type="date" id="company" value="" name="data" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">MÉDICO ASSISTENTE</label>
                        <input type="text" id="company" value="" name="medico_assistente" class="form-control" >
                    </div>
                      
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header"><strong>PARECER DO MÉDICO DA SECRETARIA MUNICIPAL DE SAÚDE EM FACE DOS RECURSOS MÉDICOS</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-4">
                        <select class="form-control" name="parecer">
                            <option value="sem parecer">SELECIONE</option>
                            <option value="autorizado">AUTORIZADO</option>
                            <option value="negado">NEGADO</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select class="form-control" name="acompanhante">
                            <option value="Não informado">SELECIONE</option>
                            <option value="Sim">COM ACOMPANHANTE</option>
                            <option value="Não">SEM ACOMPANHANTE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select class="form-control" name="tipo_transporte">
                            <option value="Não informado">TIPO DE TRANSPORTE</option>
                            <option value="Terrestre">TERRESTRE</option>
                            <option value="Aéreo">AÉREO</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div>
                <button class="btn btn-success d-print-none">SOLICITAR</button> 
        </form>
                <a href="javascript:history.back()" class="btn btn-warning d-print-none">VOLTAR</a>
            </div><br><br>
    </div>

   
   <div class="col-lg-12">
        <div class="card">
            <div class="card-header" align="center"><h3>SOLICITAÇÃO DE TRATAMENTO FORA DO DOMICILIO</h3></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="<?= $procedimentos_i_tfd['nome_paciente'] ?>" class="form-control" disabled>
                    </div>
                   
                    <div class="form-group col-md-4">
                        <label for="street" class=" form-control-label">IDENTIDADE</label>
                        <input type="text" id="street" class="form-control" value="<?= $procedimentos_i_tfd['identidade'] ?>" disabled>
                    </div>
             
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">RESIDÊNCIA</label>
                        <input type="text" id="country"  class="form-control" value="<?= $procedimentos_i_tfd['endereco_paciente'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="country"  class="form-control" value="<?= $procedimentos_i_tfd['telefone_paciente'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">CEP</label>
                        <input type="text" id="country"  class="form-control" value="<?= $procedimentos_i_tfd['cep'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">PROFISSÃO</label>
                        <input type="text" id="country"  class="form-control" value="<?= $procedimentos_i_tfd['profissao'] ?>" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="country" class=" form-control-label">DATA DE NASCIMENTO</label>
                        <input id="country"  class="form-control" value="<?= $procedimentos_i_tfd['nascimento'] ?>" disabled>
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
                    <form action="#" method="post">
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">NOME</label>
                        <input type="text" id="company" value="<?= $procedimentos_i_tfd['nome_acompanhante'] ?>" name="nome_acompanhante" class="form-control" >
                        <input type="hidden"  value="<?= $nome_paciente['paciente_id'] ?>" name="paciente_id" >


                    </div>
                   
                    <div class="form-group col-md-4">
                        <label for="street" class=" form-control-label">IDENTIDADE</label>
                        <input type="text" id="street" class="form-control" name="identidade_acompanhante" value="<?= $procedimentos_i_tfd['identidade_acompanhante'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">TELEFONE</label>
                        <input type="text" id="country"  class="form-control" name="telefone_acompanhante" value="<?= $procedimentos_i_tfd['telefone_acompanhante'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">RESIDÊNCIA</label>
                        <input type="text" id="country"  class="form-control" name="residencia_acompanhante" value="<?= $procedimentos_i_tfd['residencia_acompanhante'] ?>">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">CEP</label>
                        <input type="text" id="country"  class="form-control" name="cep_acompanhante" value="<?= $procedimentos_i_tfd['cep_acompanhante'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="country" class=" form-control-label">RELAÇÃO COM O PACIENTE</label>
                        <input type="text" id="country"  class="form-control" name="relacao_acompanhante" value="<?= $procedimentos_i_tfd['relacao_acompanhante'] ?>">
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
                        <textarea rows="3" name="historico_doenca" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['historico_doenca'] ?></textarea> 
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
                        <textarea rows="3" name="exame_fisico" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['exame_fisico'] ?></textarea> 
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
                        <textarea rows="3" name="diagnostico" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['diagnostico'] ?></textarea> 
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
                        <textarea rows="3" name="exames_complementares" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['exames_complementares'] ?></textarea> 
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
                        <textarea rows="3" name="tratamentos_realizados" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['tratamentos_realizados'] ?></textarea> 
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
                        <textarea rows="3" name="tratamento_indicado" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['tratamento_indicado'] ?></textarea> 
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
                        <textarea rows="3" name="justificar_tfd" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['justificar_tfd'] ?></textarea> 
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
                        <textarea rows="3" name="justificar_urgencia" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['justificar_urgencia'] ?></textarea> 
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
                        <textarea rows="3" name="justificar_acompanhante" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['justificar_acompanhante'] ?></textarea> 
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
                        <textarea rows="3" name="transporte_recomendavel" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['transporte_recomendavel'] ?></textarea> 
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
                        <textarea rows="3" name="outras_notas" type="text" id="company" class="form-control"><?= $procedimentos_i_tfd['outras_notas'] ?></textarea> 
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">LOCAL</label>
                        <input type="text" id="company" value="<?= $procedimentos_i_tfd['local'] ?>" name="local" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">DATA</label>
                        <input type="date" id="company" value="<?= $procedimentos_i_tfd['data'] ?>" name="data" class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                        <label for="company" class=" form-control-label">MÉDICO ASSISTENTE</label>
                        <input type="text" id="company" value="<?= $procedimentos_i_tfd['medico_assistente'] ?>" name="medico_assistente" class="form-control" >
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><strong>PARECER DO MÉDICO DA SECRETARIA MUNICIPAL DE SAÚDE EM FACE DOS RECURSOS MÉDICOS</strong><small></small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-4">
                        <input class="form-control" type="" name="parecer" value="Tratamento <?= $procedimentos_i_tfd['parecer'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input class="form-control" type="" name="acompanhante" value="Necessidade de acompanhante: <?= $procedimentos_i_tfd['acompanhante'] ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <input class="form-control" type="" name="tipo_transporte" value="Tipo de transporte: <?= $procedimentos_i_tfd['tipo_transporte'] ?>">
                    </div>
                </div>
            </div>
        </div>
        <div>
        </form>
                <button class="btn btn-success d-print-none" onclick="print()">IMPRIMIR</button> 
                <a href="javascript:history.back()" class="btn btn-warning d-print-none">VOLTAR</a>
            </div><br><br>
    </div>
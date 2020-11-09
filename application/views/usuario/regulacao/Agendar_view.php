<?php function data_tratada($data){
        $data_separada = explode("-", $data);
        return $data_separada[2] . "/" . $data_separada[1]. "/" . $data_separada[0];
    }
?>
<style type="text/css">
    
input[type="radio"] {
        visibility: hidden;
}
    
label {
    display: block;
    border: 2px solid #666;
    width: 60px;
    float: left;
}

input[type="radio"]:checked+label {
    border: 4px solid blue;

    border-color: blue;
}
img.icon {
  height: 35px;
}
</style>
   <div class="col-lg-12">
    <h1 class="text-center">FICHA DE SOLICITAÇÃO</h1><br><br>
        <div class="card">
            <div class="card-header"><strong>IDENTIFICAÇÃO</strong><small> DO PACIENTE</small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-6">
                        <p for="company" class=" form-control-label">NOME</p>
                        <input type="text" id="company" value="<?= $procedimentos_agenda['nome_paciente'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <p for="vat" class=" form-control-label">TELEFONE</p>
                        <input type="text" id="vat" value="<?= @$procedimentos_agenda['telefone_paciente'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <p for="street" class=" form-control-label">CNS</p>
                        <input type="text" id="street" class="form-control" value="<?= $procedimentos_agenda['cns_paciente'] ?>" disabled>
                    </div>
             
                    <div class="form-group col-md-6">
                        <p for="country" class=" form-control-label">ENDEREÇO</p>
                        <input type="text" id="country"  class="form-control" value="<?= $procedimentos_agenda['endereco_paciente'] ?>" disabled>
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
                    <form action="../atualiza-procedimento" method="post">
                        <input type="hidden" name="viagem_id"id="input_viagem_id">
                        <div class="form-group col-md-6">
                            <p for="company" class=" form-control-label">PROCEDIMENTO</p>
                            <input name="nome_procedimento" type="text" id="company" class="form-control" value="<?= $procedimentos_agenda['nome_procedimento'] ?>" disabled>
                            <input type="hidden" name="procedimentos_id" value="<?= $procedimentos_agenda['procedimentos_id'] ?>">
                            <input type="hidden" name="paciente_id" value="<?= $procedimentos_agenda['paciente_id'] ?>">

                        </div>
                         <div class="form-group col-md-6">
                            <p for="street" class=" form-control-label">ESPECIALIDADE</p>
                            <input name="especialidade" type="text" id="street" class="form-control" value="<?= $procedimentos_agenda['especialidade'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <p for="vat" class=" form-control-label">ESTABELECIMENTO SOLICITANTE</p>
                            <input name="estabelecimento_solicitante" type="text" id="vat" class="form-control" value="<?= $procedimentos_agenda['estabelecimento_solicitante'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <p for="street" class=" form-control-label">PROFISSIONAL SOLICITANTE</p>
                            <input name="profissional_solicitante" type="text" id="street" class="form-control" value="<?= $procedimentos_agenda['profissional_solicitante'] ?>" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <p for="street" class=" form-control-label">OBSERVAÇÕES</p>
                            <textarea rows="3" name="profissional_solicitante" type="text" id="street" class="form-control" disabled><?= $procedimentos_agenda['sintomas'] ?></textarea>
                        </div>
            <div class="card">
                <div class="card-header"><strong>PRESTADOR</strong><small></small></div>
                <div class="card-body card-block">

                             <div class="form-group col-md-3">
                                <p for="street" class=" form-control-label">ESTABELECIMENTO</p>
                                <input name="estabelecimento_prestador" value="<?= $procedimentos_agenda['estabelecimento_prestador'] ?>" type="text" required id="street" class="form-control">
                            </div>

                            <div class="form-group col-md-3">
                                <p for="street" class=" form-control-label">CIDADE</p>
                                <input name="cidade_prestador" value="<?= $procedimentos_agenda['cidade_prestador'] ?>" required type="text" id="street" class="form-control">
                            </div>

                            <div class="form-group col-md-3">
                                <p for="street" class=" form-control-label">COTA</p>
                                <input name="cota" required type="text" value="<?= $procedimentos_agenda['cota'] ?>" id="street" class="form-control">
                                <input name="profissional_agendamento" type="hidden" value="<?= @$_SESSION['nome'] ?>" id="street" class="form-control">

                            </div>

                            <div class="form-group col-md-3">
                                <p for="street" class=" form-control-label">DATA</p>
                                <input name="data" type="date" value="<?= $procedimentos_agenda['data'] ?>" required id="street" class="form-control">
                            </div>
                </div>
            </div>

            <div class="card">
            <div class="card-header"><strong>DADOS DO TRANSPORTE</strong><small></small></div>
                <div class="card-body card-block">
                            <div class="form-group col-md-4">
                                <p for="street" class=" form-control-label">PONTO DE PARTIDA</p>
                                <input name="ponto_partida" type="text" value="<?= $procedimentos_agenda['ponto_partida'] ?>" id="street" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <p for="street" class=" form-control-label">HORA DA VIAGEM</p>
                                <input name="hora_viagem" type="text" value="<?= $procedimentos_agenda['hora_viagem'] ?>" id="street" class="form-control">
                            </div>
                            

                            <div class="col-md-12" style="margin-top: 30px">
                            <?php foreach ($viagens as $viagem): 
                                $poltronas = $this->Dashboard_model->poltronas($viagem['viagem_id']); ?>
                                <button style="margin-top: 4px" title="Viagem dia <?= data_tratada($viagem['data']) ?>" type="button" class="btn btn-default d-print-none" data-toggle="modal" data-target=".bd-example<?= $viagem['viagem_id']?>-modal-lg"><?= $viagem['marca'].'/<b>'.$viagem['percurso'] ?></b> <b style="font-size: 12px"><?= data_tratada($viagem['data']) ?></b></button>
                                    

                                <div class="modal fade bd-example<?= $viagem['viagem_id']?>-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" >
                                        <div class="modal-content" style="width:1000px; height: 550px">
                                            <h2 class="mt-4 text-center">Escolher lugar</h2><br>
                                              
                                            <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/stylebus.css">
                                            
                                            <div class="row container">
                                                <img class="pl-5" src="https://queropassagem.com.br/images/onibus_desktop_frente.png" width="200" height="350">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        
                                                        <?php foreach (json_decode($poltronas, true) as $poltrona): ?>
                                                            <?php $controler = microtime(); ?>
                                                            <li class="row col-md-2 my-2 mx-2" style="margin-left: 10px; margin-top: 15px">
                                                              <ol class="seats">
                                                                <li class="seat">
                                                                  <input value="<?=$poltrona['numero']?>" type="radio" name="poltrona[numero]" id="<?=$controler.'_'.$poltrona['numero']?>" <?=($poltrona['ocupado']=='sim') ? 'disabled':'' ?>>
                                                                  <label for="<?=$controler.'_'.$poltrona['numero']?>" clas="poltrona"><img class="icon" src="<?= base_url() ?><?=($poltrona['ocupado']=='sim') ? 'public/images/poltrona_ocupada.svg" alt=""':'public/images/poltrona_livre.svg" alt=""' ?>"></label>
                                                                </li>
                                                              </ol>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                                <img style="padding-left: 50px;" src="https://queropassagem.com.br/images/onibus_desktop_traseira.png" width="100" height="350">
                                        
                                            </div><br>
                                            <button class="btn btn-success d-print-none set_viagem_id" class="close" data-dismiss="modal" aria-label="Close" onclick="setValue(<?=$viagem['viagem_id']?>)">ESCOLHER</button> 
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                            </div>
                            
                </div>
            </div>
                        <button class="btn btn-success d-print-none">CONCLUIR</button> 
                        <a href="javascript:history.back()" class="btn btn-warning d-print-none">VOLTAR</a>
                    </form>

                </div>
            </div>
        </div>
            <div align="center" class="d-xs-none d-sm-none d-md-none d-lg-none d-print-block">
                <br>
                ___________________________________________________________________________________ <br>
                <b>Assinatura do paciente</b>
                <br><br><br><br>
                ___________________________________________________________________________________ <br>
                <b><?= @$_SESSION['nome'] ?></b>

            </div>
    </div>

   

   <script type="text/javascript">
      function setValue(viagemId){
            document.getElementById("input_viagem_id").value = viagemId;
       }
   </script>
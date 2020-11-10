  <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>DADOS</strong><small> DO VEÍCULO</small></div>
            <div class="card-body card-block">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="company" class=" form-control-label">TIPO DE VEÍCULO</label>
                        <input type="text" id="company" value="<?= $veiculo['tipo'].' - '.$veiculo['lugares'] ?> LUGARES" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vat" class=" form-control-label">MARCA</label>
                        <input type="text" id="vat" value="<?= $veiculo['marca'] ?>" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="street" class=" form-control-label">PLACA</label>
                        <input type="text" id="street" class="form-control" value="<?= $veiculo['placa'] ?>" disabled>
                    </div>
             
                    <div class="form-group col-md-6">
                        <label for="country" class=" form-control-label">ANO</label>
                        <input type="text" id="country"  class="form-control" value="<?= $veiculo['ano'] ?>" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong>DADOS</strong><small> DA VIAGEM</small></div>
                <div class="row">
                 <div class="card-body card-block">
                    <form action="../add-paciente-casa-save" method="post" autocomplete="off">
                        <div class="form-group col-md-6">
                            <label for="street" class=" form-control-label">DATA DA VIAGEM</label>
                            <input name="data" type="date" id="street" class="form-control" required>
                            <input name="veiculo_id" type="hidden" value="<?= segment('4') ?>">
                            <input name="realizada" type="hidden" value="nao">
                            <br><br>
                            <?php for ($i=1; $i <= $veiculo['lugares']; $i++) { ?>
                                <input type="hidden" name="poltronas_json[<?=$i?>][numero]" value="<?= $i ?>">
                                <input type="hidden" name="poltronas_json[<?=$i?>][paciente]" value="">
                                <input type="hidden" name="poltronas_json[<?=$i?>][ocupado]" value="nao">
                            <?php } ?>
                      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="street" class=" form-control-label">TIPO DE PERCURSO</label>
                            <select required id="street" name="percurso" class="form-control">
                                <option value="">SELECIONE</option>
                                <option value="Ida e Volta">IDA E VOLTA</option>
                                <option value="Ida">SOMENTE IDA</option>
                                <option value="Volta">SOMETE VOLTA</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <button style="margin-left: 10px" class="btn btn-success d-print-none">CONCLUIR</button> 
                            <a href="<?=$this->agent->referrer()?>" class="btn btn-warning d-print-none">VOLTAR</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   